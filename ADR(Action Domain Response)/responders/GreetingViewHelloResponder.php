<?php

class GreetingViewHelloResponder
{
    protected $domain = null;

    public function __construct()
    {
        $this->domain = new Greeting();
    }

    public function run()
    {
        $message = $this->domain->hello();

        include 'templates/message.php';
    }
}