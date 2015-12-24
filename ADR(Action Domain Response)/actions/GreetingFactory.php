<?php

class GreetingFactory
{
    public static function getAction($action)
    {
        switch($action) {
            case 'goodbye':
                return new GreetingViewGoodbye();
            case 'hello':
                return new GreetingViewHello();
            default:
                return new DefaultAction();
        }
    }
}