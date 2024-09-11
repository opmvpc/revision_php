<?php


echo "Entrez la hauteur : ";
$h = readline();


$l = readline("Entrez la longueur : ");

$perimetre = $h * 2 + $l * 2;
$aire = $h * $l;

echo "Périmètre : {$perimetre}" . PHP_EOL;
echo "Aire : {$aire}";
