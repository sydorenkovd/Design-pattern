<?php

class Dispatcher
{
    protected $listeners = array();

    protected function __construct() { }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public static function subscribe($object, $subscriber)
    {
        $instance = Dispatcher::getInstance();
        $id = spl_object_hash($object);

        $instance->listeners[$id][] = $subscriber;
    }

    public static function publish($object)
    {
        $instance = Dispatcher::getInstance();
        $id = spl_object_hash($object);

        $subscribers = $instance->listeners[$id];

        foreach($subscribers as $subscriber) {
            $subscriber->doSomething();
        }
    }
}