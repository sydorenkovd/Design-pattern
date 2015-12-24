<?php

include_once 'database.php';
include_once 'mock.php';

$user = new MockUser();

$result = $user->delete(1);

if ($result) {
    echo "We deleted a user!";
} else {
    echo "We did not delete a user.";
}