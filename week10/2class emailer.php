<?php

class Emailer {
    public $sender;
    public $recipient;
    public $subject;
    public $body;

    function __construct($sender, $recipient, $subject, $body) {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->body = $body;
    }

    function sendEmail() {
        echo "Email sent to $this->recipient from $this->sender with subject '$this->subject'";
    }
}

$email = new Emailer("sah@gmail.com", "shamim@gmail.com", "test email", "Hello, how are you?");
$email->sendEmail();
