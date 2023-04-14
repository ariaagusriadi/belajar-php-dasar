<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();
$functionName = "bar";
$functionName();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return " Sample $name";
}


sayHello("aria", 'sampleFunction');
sayHello("aria", 'strtoupper');
sayHello("ARIA", 'strtolower');
