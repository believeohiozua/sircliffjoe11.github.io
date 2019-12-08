<?php

namespace App\Listeners;

use App\Models\Timeline;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateTimelineNotificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $recipients = $event->data['recipients'];

        foreach ($recipients as $recipient) {
            $timeline = new Timeline();
            $timeline->user_id = $recipient->id;
            $timeline->title = $event->data['timeline'];
            $timeline->details = $event->data['details'] ?? null;
            $timeline->type = $event->data['type'];
            $timeline->save();
        }
    }
}
