<?php

$sayHello = function(string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Christian"); 
$sayHello("Tyn"); 


function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

$filterFunction = function(string $name) {
    return strtoupper($name);
};

sayGoodBye("Christian", $filterFunction);


$firstName = "Chris";
$lastName = "Tian";

$sayHelloTyn = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloTyn();