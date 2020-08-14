<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model {
    use SoftDeletes;

    protected $fillable = [
        'group_id',
        'order',
        'description',
    ];

    public function groups() {
        return $this->hasMany('App\Group');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function entries() {
        return $this->hasMany('App\Entry');
    }

    public function getOrder() {
        return $this->order ?? $this->getNextOrder();
    }

    public function getNextOrder() {
        return $this->getLastOrder() + 1;
    }

    public function getLastOrder() {
        return Group::where('group_id', $this->group_id)
            ->max('order') ?? 0;
    }

    public function getOrderPath() {
        return ($this->group) ?
                "{$this->group->getPath()}.{$this->order}"
            :
                $this->order;
    }

    public function groupsRecursive() {
        return $this->groups()
            ->with('groupsRecursive');
    }

    public static function firstLevelOrderedByOrder() {
        return Group::with('groups')
            ->orderBy('order')
            ->where('group_id', null)
            ->get();
    }
}
