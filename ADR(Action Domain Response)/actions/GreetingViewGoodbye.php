<?php

class GreetingViewGoodbye
{
    protected $response = null;

    public function run()
    {
        $this->response = new GreetingViewGoodbyeResponder();
        $this->response->run();
    }
}