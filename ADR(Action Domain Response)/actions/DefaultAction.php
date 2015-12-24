<?php

class DefaultAction
{
    protected $response = null;

    public function run()
    {
        $this->response = new DefaultResponder();
        $this->response->run();
    }
}