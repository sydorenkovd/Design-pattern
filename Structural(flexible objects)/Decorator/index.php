<?php

include_once 'html.php';
include_once 'json.php';

$book = new stdClass();
$book->title = "Patterns of Enterprise Application Architecture";
$book->author_first_name = "Martin";
$book->author_last_name = "Fowler";

echo '<h1>HTML Decorator</h1>';

$htmlDecorator = new HTMLDecorator($book);
$htmlDecorator->render();

echo '<h1>JSON Decorator</h1>';

$jsonDecorator = new JSONDecorator($book);
$jsonDecorator->render();