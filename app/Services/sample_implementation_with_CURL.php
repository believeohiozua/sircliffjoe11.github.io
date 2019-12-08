<?php


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

//Insert your API Parameters
$senderID ="BulkSMSNG";
$mobile ="07037770033";
$messageBody = "This is a test message";
$url = "https://www.bulksmsnigeria.com/api/v1/sms/create";
$apiToken = 'm8bxwcb1mah0s0rQO5DOq6JNFr7OqJLR';

//Pass all Parameters into a array to be submitted to the SendViaPost function as a Single Variable
$arr_params = array(
    'from'  	=>  $senderID,
    'to'  		=>  $mobile,
    'body'  	=>  $messageBody,
    'api_token' =>  $apiToken,
    'dnd'       =>  4
);


//Dispatch Message
sendViaPost($url,$arr_params);
sendViaPost($url,array(
    'from'  	=>  $senderID,
    'to'  		=>  $mobile,
    'body'  	=>  $messageBody,
    'api_token' =>  $apiToken,
    'dnd'       =>  4
));









