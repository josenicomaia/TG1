<?php

namespace App;

use App\Repositories\GroupRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model {
    use SoftDeletes;

    protected $fillable = [
        'group_id',
        'order',
        'description',
    ];

    private GroupRepository $groupRepository;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->groupRepository = resolve(GroupRepository::class);
    }

    public function groups() {
        return $this->hasMany('App\Group');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function children() {
        return $this->groups()
            ->with(['children', 'group']);
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
        return $this->groupRepository->getLastOrder($this->group_id);
    }

    public function getOrderPath() {
        return $this->group ?
                "{$this->group->getOrderPath()}.{$this->order}"
            :
                $this->order;
    }

    public function getFullDescription() {
        return "{$this->getOrderPath()} - {$this->description}";
    }
}
