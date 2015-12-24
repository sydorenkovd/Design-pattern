<?php
/*
Action Domain Response pattern:
Domains has all business logic,
Actions handle the routing logic,
Respondes handle all the responder logic
Probably uses dependency injections for simplier
*/
include_once 'actions/DefaultAction.php';
include_once 'actions/GreetingFactory.php';
include_once 'actions/GreetingViewHello.php';
include_once 'actions/GreetingViewGoodbye.php';
include_once 'domains/greeting.php';
include_once 'responders/DefaultResponder.php';
include_once 'responders/GreetingViewHelloResponder.php';
include_once 'responders/GreetingViewGoodbyeResponder.php';

$request = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : '';

switch($module) {
    case 'greeting':
        $action = GreetingFactory::getAction($request);
        break;
    default:
        $action = new DefaultAction();
}

$action->run();