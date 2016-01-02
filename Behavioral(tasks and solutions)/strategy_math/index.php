<?php

include_once 'output.php';
include_once 'square.php';
include_once 'cube.php';
include_once 'fourth.php';

$input = 10;

$output = new Output(new Square());
echo $output->display($input);

$output->setStrategy(new Cube());
echo $output->display($input);

$output->setStrategy(new Fourth());
echo $output->display($input);