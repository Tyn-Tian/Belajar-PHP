<?php

$names = ["Christian", "Chris", "Tian"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index : $name" . PHP_EOL;
}

$person = [
    "first_name" => "Christian",
    "middle_name" => "Chris",
    "last_name" => "Tian"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}