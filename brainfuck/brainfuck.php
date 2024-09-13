<?php

$memory = array_fill(0, 30000, 0);
$pointer = 0;

// lire le fichier en param
$programName = $argv[1];
$program = file_get_contents($programName);

var_dump($program);

$instruction_cursor = 0;

while ($instruction_cursor < strlen($program)) {
    match ($program[$instruction_cursor]) {
        ">" => $pointer++,
        "<" => $pointer--,
        "+" => $memory[$pointer]++,
        "-" => $memory[$pointer]--,
        "." => print(chr($memory[$pointer])),
        "," => $memory[$pointer] = fgetc(STDIN),
        "[" => openBracket($memory, $pointer, $program, $instruction_cursor),
        "]" => closeBracket($memory, $pointer, $program, $instruction_cursor),
    };

    $instruction_cursor++;
}

function openBracket(array $memory, int $pointer, string $program, int &$instruction_cursor): void
{
    if ($memory[$pointer] === 0) {
    } else {
    }
}

function closeBracket(array $memory, int $pointer, string $program, int &$instruction_cursor): void {}
