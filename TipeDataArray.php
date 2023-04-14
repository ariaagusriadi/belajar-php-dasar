<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ['aria', 'agus', 'riadi'];
var_dump($names);


var_dump($names[0]);

$names[0] = 'asi';
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "ajnya";
var_dump($names);

var_dump(count($names));

$eko = array(
    "id" => "aria",
    "name" => "aria agus riadi",
    "age" => 20,
    "addres" => array(
        'city' => 'jakarta',
        'country' => 'indonesia',
    )
);

var_dump($eko);
var_dump($eko["name"]);
var_dump($eko["addres"]['city']);

$budi = [
    'id' => 'budi',
    'name' => 'aria budi',
    'age' => 40,
    "addres" => [
        'city' => 'jakarta',
        'country' => 'indonesia',
    ]
];
var_dump($budi);
