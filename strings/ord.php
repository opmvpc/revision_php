<?php

function computeScore(string $str): int
{
    $str = \strtoupper($str);

    $score = 0;

    for ($i = 0; $i < \strlen($str); $i++) {
        $score += \ord($str[$i]) - 64;
    }

    return $score;
}

echo computeScore("hello");
