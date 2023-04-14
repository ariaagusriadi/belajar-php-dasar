<?php

$first = [
    "first_name" => "aria agus"
];

$last = [
    "first_name" => "ajo",
    "last_name" => "riadi"
];

$full = $first + $last;
// var_dump($full);


$a = [
    "first_name" => "aria",
    "last_name" => "riadi"
];
$b = [
    "last_name" => "riadi",
    "first_name" => "aria"
];

var_dump($a == $b);
var_dump($a === $b);