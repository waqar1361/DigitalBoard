<?php

namespace App\Listeners;

use App\Notifications\DocumentPublished;
use App\Events\DocumentPublished as Event;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notify
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
     * @param  DocumentPublished  $event
     * @return void
     */
    public function handle(Event $event)
    {
        $users = User::notifiable()->get();
        foreach ($users as $user)
        {
            $user->notify(new DocumentPublished($event->document));
        }
    }
}
