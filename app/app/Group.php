<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model {
    use SoftDeletes;

    protected $fillable = [
        'description'
    ];

    public function entries() {
        return $this->hasMany('App\Entry');
    }
}
