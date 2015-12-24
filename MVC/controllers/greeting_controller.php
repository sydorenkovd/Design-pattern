<?php

class GreetingController extends DefaultController
{
    protected $model = null;

    public function __construct()
    {
        $this->model = new Greeting();
    }

    public function hello()
    {
        $message = $this->model->hello();

        include_once 'views/message.php';
    }

    public function goodbye()
    {
        $message = $this->model->goodbye();

        include_once 'views/message.php';
    }

}