<?php

namespace App\Listeners;

use GuzzleHttp\Client;
use App\Traits\FlashMessages;
use Illuminate\Queue\InteractsWithQueue;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSMSNotificationListener
{
    Use FlashMessages;
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
        //Insert your API Parameters
        $senderID ="ChiMony";
        $url = "https://www.bulksmsnigeria.com/api/v1/sms/create";
        $apiToken = 'kQd0NbGTnNO42KF6ldZKSOxF8oFSUjZyygEkUzqMeBn6hEaCqN9NUwT4FHHd';

        $recipients = $event->data['recipients'];
        
        foreach ($recipients as $recipient) {
            //Pass all Parameters into a array to be submitted to the SendViaPost function as a Single Variable
            $mobile = formatMobile($recipient->mobile);
            $messageBody = 'Hello '.$recipient->last_name.', '.$event->data['sms'];
            $arr_params = array(
                'from'  	=>  $senderID,
                'to'  		=>  $mobile,
                'body'  	=>  $messageBody,
                'api_token' =>  $apiToken,
                'dnd'       =>  4
            );

            //Dispatch Message
            $this->sendViaPost($url, $arr_params);
        }
    }

    //Here is the function to send via POST using CURL
    function sendViaPost($url, $arr_params, $headers = array('Content-Type: application/x-www-form-urlencoded')) {
        $response = array();
        $final_url_data = $arr_params;
        if (is_array($arr_params)) {
            $final_url_data = http_build_query($arr_params, '', '&');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $final_url_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $response['body'] = curl_exec($ch);
        $response['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response['body'];
    }
}
