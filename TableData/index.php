<?php

include_once 'user.php';

$gateway = new UserGateway();

$users = $gateway->loadAll();
foreach ($users as $user) {
    echo $user['user_username'] . '<br />';
}

echo '<hr />';

$user = $gateway->loadById(2);
echo $user['user_username'];