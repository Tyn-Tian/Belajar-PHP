<?php

function sum(int $first, int $second): int {
    return $first + $second;
}

$result = sum(10, 10);
var_dump($result);


function getFinalValue(int $value): string {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);
