<?php

include_once 'controllers/default_controller.php';
include_once 'controllers/greeting_controller.php';
include_once 'models/greeting.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : '';

switch($module) {
    case 'greeting':
        $controller = new GreetingController();
        break;
    default:
        $controller = new DefaultController();
}

$controller->run($action);