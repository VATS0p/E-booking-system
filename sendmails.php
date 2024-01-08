<?php
include('config.php');

$to_email = "vatspatel6559@gmail.com";
$subject = "Message Regarding Appointment";
$body = "Hi, King";
$headers = "From: Appointment Lelo";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}