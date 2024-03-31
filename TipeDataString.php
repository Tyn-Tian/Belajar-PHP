<?php

echo 'Nama : ';
echo 'Christian';
echo "\n";

echo "Nama : ";
echo "Christian\t Tian \t Tyn\n";

// Heredoc
echo <<<TEXT
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga

TEXT;

// Nowdoc
echo <<<'TEXT'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
TEXT;
