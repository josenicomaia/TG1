<?php

namespace App\Repositories;

use App\Group;

class GroupRepository {
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Group[]
     */
    public function getTree() {
        return Group::query()
            ->with(['children'])
            ->orderBy('order')
            ->where('group_id', null)
            ->get();
    }

    /**
     * @param $groupId int
     * @return Group
     */
    public function getGroupWithTree($groupId): Group {
        return Group::query()
            ->with(['children'])
            ->orderBy('order')
            ->where('id', $groupId)
            ->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Group[]
     */
    public function getFlatTree() {
        return Group::query()
            ->with(['group'])
            ->get();
    }

    /**
     * @param $groupId int
     * @return int
     */
    public function getLastOrder($groupId): int {
        return Group::where('group_id', $groupId)
                ->max('order') ?? 0;
    }
}
