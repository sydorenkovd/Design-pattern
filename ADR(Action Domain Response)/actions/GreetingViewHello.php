<?php

class GreetingViewHello
{
    protected $response = null;

    public function run()
    {
        $this->response = new GreetingViewHelloResponder();
        $this->response->run();
    }
}