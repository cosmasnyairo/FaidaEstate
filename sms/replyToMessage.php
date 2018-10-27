<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php

require_once 'vendor/autoload.php'; // Loads the library
use Twilio\Twiml;

$response = new Twiml;
$body = $_REQUEST['Body'];
$default = "I just wanna tell you how I'm feeling - Gotta make you understand";
$message = "give you up";
if (strtolower($body) == 'never gonna') {
    $response->message($message);
} else {
    $response->message($default);
}
print $response;
