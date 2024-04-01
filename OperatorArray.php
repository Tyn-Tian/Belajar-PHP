<?php

$first = [
    "first_name" => "Chris"
];

$last = [
    "first_name" => "Tyn",
    "last_name" => "Tian"
];

var_dump($first + $last);

$a = [
    "first_name" => "Chris",
    "last_name" => "Tian"
];

$b = [
    "last_name" => "Tian",
    "first_name" => "Chris"
];

var_dump($a == $b);
var_dump($a === $b);