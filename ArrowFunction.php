<?php

$firstName = "Chris";
$lastName = "Tian";

$anonymousFunction = function() use ($firstName, $lastName): string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();