<?php

namespace App;

use App\Events\EntryCreated;
use App\Events\EntryDeleted;
use App\Events\EntryUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use NumberFormatter;

class Entry extends Model {
    use SoftDeletes;

    private NumberFormatter $formatter;

    protected $fillable = [
        'at',
        'group_id',
        'amount',
        'description',
    ];

    protected $dates = [
        'at',
    ];

    protected $dispatchesEvents = [
        'created' => EntryCreated::class,
        'updated' => EntryUpdated::class,
        'deleted' => EntryDeleted::class,
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

    public function setAmountAttribute($amount) {
        $this->attributes['amount'] = number_format(str_replace(",",".",str_replace(".","", $amount)), 2, '.', '');
    }
}
