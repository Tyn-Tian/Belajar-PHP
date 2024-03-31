<?php

// Membuat Array
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Chris", "Tian", "Budi"];
var_dump($names);


// Operasi Array
var_dump($names[0]);

$names[1] = "Tyn";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Heru";
var_dump($names);

var_dump(count($names));

// Membuat Map
$christian = array(
    "id" => "Tyn",
    "name" => "Christian",
    "age" => 21,
    // Array dalam array
    "address" => array(
        "city" => "Pangkalpinang",
        "country" => "Indonesia"
    )
);

var_dump($christian);
var_dump($christian["address"]["country"]);

$budi = [
    "id" => "Bd",
    "name" => "Budi",
    "age" => 31,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];

var_dump($budi["name"]);
var_dump($budi["address"]["city"]);
