<?php

$name = "Christian";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// Konversi ke Number dan sebalinknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

// Mengakses Karakter
$name = "Tian";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;


// Variable Parsing
echo "Hello $name, Selamat belajar PHP" . PHP_EOL;

// Curly Brace
echo "Hello {$name}'s, Selamat belajar PHP" . PHP_EOL;