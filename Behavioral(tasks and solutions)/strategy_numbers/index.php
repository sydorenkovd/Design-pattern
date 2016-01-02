<?php

include 'strategies.php';

$even = new EvenStrategy();
$filter = new NumberFilter($even);

// This should output 2 4 6 8 10 with a newline between each
for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}
echo "<br>";
$odd = new OddStrategy();
$filter = new NumberFilter($odd);

// This should output 1 3 5 7 9 with a newline between each
for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}