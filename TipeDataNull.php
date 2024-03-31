<?php

$name = null;
$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Mengecek null
echo "Is null : ";
var_dump(is_null($name));


// Menghapus variable
$contoh = "Christian";
unset($contoh);

// Mengecek apakah variable ada dan tidak null
$contoh = "Tyn";

var_dump(isset($contoh));
