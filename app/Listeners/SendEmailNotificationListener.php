<?php

namespace App\Listeners;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailNotificationListener implements ShouldQueue
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
            if ($recipient->email) {
                $data['recipient'] = $recipient;
                $data['message'] = $event->data['email'];
                $data['subject'] = $event->data['subject'];
                Mail::to( $recipient->email )->send( new SendEmail($data) );
            }
        }
    }
}
