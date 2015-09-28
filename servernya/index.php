<?php

$regId = 'APA91bEKT6CGTeeKfjaxFliiO2RZbR6LYRDi8bJNtfgHc-F-erCUcXMUkZsFSRkcP9alVBufun4M_tMLk0hk_3YlaqrBxGZVs0Jo0la1f32-gGddWBKcV2btzlbz8JFzJ3o1qynzCmmN'; //registerid target (android)
$message = "Hallo alul";


$registrationIds = array($regId); 
$msg = array( 'message' => $message, 'title' => 'Cek cekidot', 'tickerText' => $message, 'vibrate' => 1, 'sound' => 1, );

// $message      = "the test message";
// $tickerText   = "ticker text message";
// $contentTitle = "content title";
// $contentText  = "content body";
// $msg = array('message' => $message, 'tickerText' => $tickerText, 'contentTitle' => $contentTitle, "contentText" => $contentText);

$fields = array(
    'registration_ids' => $registrationIds,
    'data' => $msg
);
$fields = json_encode($fields);
//keynya adalah browser key
$arrContextOptions=array(
    "http" => array(
        "method" => "POST",
        "header" =>
            'Authorization: key = AIzaSyBIae6V8ptQHLhFcFtNfMmP3Y4dpusrvAA'. "\r\n" .
            'Content-Type: application/json'. "\r\n",
        "content" => $fields,
    ),
    "ssl"=>array(
        "allow_self_signed"=>true,
        "verify_peer"=>false,
    ),
);
$arrContextOptions = stream_context_create($arrContextOptions);
$result = file_get_contents('https://android.googleapis.com/gcm/send', false, $arrContextOptions);

echo $result;
