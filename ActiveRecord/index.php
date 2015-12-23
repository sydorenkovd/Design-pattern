<?php

include_once 'user.php';

$user = new User();
$user->load(2);

echo '<pre>';
print_r($user);