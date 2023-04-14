<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName". PHP_EOL;
}

sayHello('aria', "strtoupper");
sayHello('aria', "strtolower");
sayHello("aria", function (string $name): string{
    return strtoupper($name);
});
sayHello("aria", fn($name) => strtoupper($name));
