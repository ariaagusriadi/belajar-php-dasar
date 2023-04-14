<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("aria");
$sayHello("agus");
$sayHello("riadi");

function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bye $finalname" . PHP_EOL;
}

sayGoodBye('EKo', function (string $name): string{
    return strtoupper($name);
});


$filterNameFunction =  function (string $name): string{
    return strtoupper($name);
};


sayGoodBye("aria", $filterNameFunction);


$fristName = "Aria";
$lastName = "Riadi";

$sayHelloAria = function ( ) use ($fristName, $lastName){
    echo "Hello $fristName $lastName". PHP_EOL;
};

$sayHelloAria();

$fristName = "Aa";
$lastName = "di";


$sayHelloAria();



