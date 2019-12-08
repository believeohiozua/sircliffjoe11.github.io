<?php

namespace App\Listeners;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminListener implements ShouldQueue
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
        $data['message'] = $event->data['email'];
        $data['subject'] = $event->data['subject'];
        $data['recipient'] = [ 'name' => 'Admin' ];
        Mail::to( 'chimoneyng@gmail.com' )->send( new SendEmail($data) );
    }
}
