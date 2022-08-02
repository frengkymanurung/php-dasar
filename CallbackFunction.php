<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Frengky", "strtoupper");
sayHello("Frengky", "strtolower");
sayHello("Frengky", function (string $name): string {
    return strtoupper($name);
});
sayHello("Frengky", fn($name) => strtoupper($name));