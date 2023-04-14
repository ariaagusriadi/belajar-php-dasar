<?php

$name = "aria"; // global scope

function sayhello(){
    global $name; // global name
    echo $name . PHP_EOL;
    echo $GLOBALS["name"] . PHP_EOL;
}

sayhello();