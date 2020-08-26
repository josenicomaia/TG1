<?php

namespace App\Listeners;

use App\Aggregation;
use App\Entry;
use App\Events\EntryUpdated;
use App\Group;
use App\Repositories\GroupRepository;

class UpdateEntryToAggregations {
    private GroupRepository $groupRepository;

    public function __construct(GroupRepository $groupRepository) {
        $this->groupRepository = $groupRepository;
    }

    public function handle(EntryUpdated $event): void {
        $entry = $event->getEntry();

        $this->processGroupPath(
            $entry,
            $this->groupRepository->getGroupWithTree($entry->group->id));
    }

    private function processGroupPath(Entry $entry, Group $group) {
        $originalAggregation = Aggregation::find(
            $group->id,
            $entry->getOriginal('at')->firstOfMonth());

        $originalAggregation->items -= 1;
        $originalAggregation->total -= $entry->getOriginal('amount');
        $originalAggregation->save();

        $newAggregation = Aggregation::find(
            $group->id,
            $entry->at->firstOfMonth());

        if (!$newAggregation) {
            $newAggregation = new Aggregation([
                'group_id' => $group->id,
                'at' => $entry->at->firstOfMonth(),
                'items' => 0,
                'total' => 0.0,
            ]);
        }

        $newAggregation->items += 1;
        $newAggregation->total += $entry->amount;
        $newAggregation->save();

        if ($group->group) {
            $this->processGroupPath($entry, $group->group);
        }
    }
}
