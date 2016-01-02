<?php

require 'vendor/autoload.php';
include_once 'posts.php';

$gateway = new PostGateway();

$posts = $gateway->loadAll();
foreach ($posts as $post) {
    echo $post['title'] . '<br />';
}

echo '<hr />';

$posts = $gateway->loadById(1);
foreach ($posts as $post) {
    echo $post['title'] . '<br />';
}