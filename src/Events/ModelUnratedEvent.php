<?php

namespace EarHackerDem\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ModelUnratedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        private Model $qualifier,
        private Model $rateable
    ) {
        //
    }

    public function getQualifier()
    {
        return $this->qualifier;
    }

    public function getRateable()
    {
        return $this->rateable;
    }
}
