<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use NumberFormatter;

class Goal extends Model {
    use SoftDeletes;

    protected $fillable = [
        'group_id',
        'at',
        'limit',
    ];

    protected $dates = [
        'at',
    ];

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->formatter = resolve(NumberFormatter::class);
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function getFormattedAmount() {
        return $this->formatter->formatCurrency($this->amount, 'BRL');
    }

    public function getFormattedAt() {
        return $this->at->format('d/m/Y');
    }
}
