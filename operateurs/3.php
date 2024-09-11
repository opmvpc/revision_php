<?php


echo "Nombre 1 : ";
$n1 = readline();
$n2 = readline("Nombre 2 : ");

echo "n1 : {$n1}" . PHP_EOL;
echo "n2 : {$n2}" . PHP_EOL . PHP_EOL;


echo "SWAP" . PHP_EOL . PHP_EOL;

$tmp = $n2;
$n2 = $n1;
$n1 = $tmp;

echo "n1 : {$n1}" . PHP_EOL;
echo "n2 : {$n2}" . PHP_EOL . PHP_EOL;
