<?php

namespace App\Listeners;

use App\Aggregation;
use App\Entry;
use App\Events\EntryCreated;
use App\Group;
use App\Repositories\GroupRepository;

class SumEntryToAggregations {
    private GroupRepository $groupRepository;

    public function __construct(GroupRepository $groupRepository) {
        $this->groupRepository = $groupRepository;
    }

    public function handle(EntryCreated $event): void {
        $entry = $event->getEntry();

        $this->processGroupPath(
            $entry,
            $this->groupRepository->getGroupWithTree($entry->group->id));
    }

    private function processGroupPath(Entry $entry, ?Group $group) {
        $aggregation = Aggregation::find(
            $group->id,
            $entry->at->firstOfMonth());

        if (!$aggregation) {
            $aggregation = new Aggregation([
                'group_id' => $group->id,
                'at' => $entry->at->firstOfMonth(),
                'items' => 0,
                'total' => 0.0,
            ]);
        }

        $aggregation->items += 1;
        $aggregation->total += $entry->amount;
        $aggregation->save();

        if ($group->group) {
            $this->processGroupPath($entry, $group->group);
        }
    }
}
