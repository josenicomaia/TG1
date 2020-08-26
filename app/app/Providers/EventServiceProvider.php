<?php

namespace App\Providers;

use App\Events\EntryCreated;
use App\Events\EntryDeleted;
use App\Events\EntryUpdated;
use App\Listeners\SubtractEntryFromAggregations;
use App\Listeners\SumEntryToAggregations;
use App\Listeners\UpdateEntryToAggregations;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        EntryCreated::class => [
            SumEntryToAggregations::class,
        ],
        EntryUpdated::class => [
//            UpdateEntryToAggregations::class,
        ],
        EntryDeleted::class => [
            SubtractEntryFromAggregations::class,
        ],
    ];

    public function boot(): void {
        parent::boot();
    }
}
