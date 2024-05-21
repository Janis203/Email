<?php

$email = readline("Enter your email address: ");
$url = file_get_contents("https://api.emailvalidation.io/v1/info?apikey=ema_live_b8FuW1KTMfH5cFIuqJWFLPquRXqXncNsY5qqfqDt&email=$email");
if (!$url) {
    die("Failed");
}
$verify = json_decode($url);
if ($verify->state == "deliverable") {
    echo "can send email " . PHP_EOL;

}

