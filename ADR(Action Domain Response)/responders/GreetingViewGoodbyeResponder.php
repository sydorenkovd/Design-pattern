<?php

class GreetingViewGoodbyeResponder
{
    protected $domain = null;

    public function __construct()
    {
        $this->domain = new Greeting();
    }

    public function run()
    {
        $message = $this->domain->goodbye();

        include 'templates/message.php';
    }
}