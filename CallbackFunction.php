<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Tyn", "strtoupper");
sayHello("Tyn", function(string $name): string {
    return strtoupper($name);
});
sayHello("Tyn", fn($name) => strtoupper($name));