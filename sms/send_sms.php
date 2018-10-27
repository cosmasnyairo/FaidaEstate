<?php
session_start();

// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/Twilio/autoload.php';
use \Twilio\Rest\Client;
	
// Your Account SID and Auth Token from twilio.com/console
$account_sid = "AC46b7c8d2cab8b31868a0ccef23cf07aa";
$auth_token = "a2da767833259a16607fa4f9a3aa14a1";
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+14797779382";
$client = new Client($account_sid, $auth_token);

$client->messages->create(
    // Where to send a text message (your cell phone?)
    "+254735696067",
    array(
        'from' => $twilio_number,
        'body' => "Payment Received!"
    )
);
                echo '<script language="javascript">';
                echo 'alert("Payment Received!")';
                echo '</script>';
				echo "<script>location.href='../php/finances.php';</script>";	


?>
