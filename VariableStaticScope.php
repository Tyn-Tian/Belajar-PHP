<?php

function increment() {
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();