<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model {
    use SoftDeletes;

    public function group() {
        return $this->belongsTo('App\Group');
    }
}
