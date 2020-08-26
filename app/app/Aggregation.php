<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Aggregation extends Model {
    protected $fillable = [
        'group_id',
        'at',
        'items',
        'total',
    ];

    protected $dates = [
        'at',
    ];

    public static function find($groupId, Carbon $at): ?Aggregation {
        return static::where([
            'group_id' => $groupId,
            'at' => $at,
        ])->first();
    }

    protected function setKeysForSaveQuery(Builder $query) {
        $query->where('group_id', $this->getValueForSaveQuery('group_id'))
            ->where('at', $this->getValueForSaveQuery('at'));

        return $query;
    }

    private function getValueForSaveQuery($keyName) {
        return $this->original[$keyName] ?? $this->getAttribute($keyName);
    }
}
