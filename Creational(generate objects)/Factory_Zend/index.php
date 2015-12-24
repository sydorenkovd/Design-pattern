<?php

require 'vendor/autoload.php';

//Load a php file as array
$config = Zend\Config\Factory::fromFile('config.json');

//Load a xml file as Config object
$config = Zend\Config\Factory::fromFile('config.xml', true);