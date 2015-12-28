<?php

class Component
{
    protected $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function doSomething()
    {
        echo $this->name . ' did something! <br />';

        $instance = Dispatcher::getInstance();
        $instance::publish($this);
    }
}