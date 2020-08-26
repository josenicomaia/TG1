<?php

namespace App\Events;

use App\Entry;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EntryDeleted {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Entry $entry;

    public function __construct(Entry $entry) {
        $this->entry = $entry;
    }

    /**
     * @return Entry
     */
    public function getEntry(): Entry {
        return $this->entry;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn() {
        return new PrivateChannel('channel-name');
    }
}
