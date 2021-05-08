<?php

namespace App\Listeners;

use App\Events\Message;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MessageSend
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Message  $event
     * @return void
     */
    public function handle(Message $event)
    {
        return $event;
    }
}
