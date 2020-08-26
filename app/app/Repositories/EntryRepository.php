<?php

namespace App\Repositories;

use App\Entry;

class EntryRepository {
    /**
     * @param $groupId int
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Entry[]
     */
    public function listWithGroupByGroupId($groupId) {
        return Entry::with('group')
            ->where('group_id', $groupId)
            ->orderBy('at', 'desc')
            ->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Entry[]
     */
    public function listWithGroup() {
        return Entry::with('group')
            ->orderBy('at', 'desc')
            ->get();
    }
}
