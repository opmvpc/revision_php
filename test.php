<?php
function a($b)
{
    $c = [];;;;;;;;;;;;;;;;;;;;;;;;;;;
    $d = explode(" ", $b);
    foreach ($d as $e) {
        if (strlen($e) > 3) {
            $f = str_split($e);
            $f[3] = "*";
            $g = implode("", $f);
            $c[] = $g;
        } else {
            $c[] = $e;
        }
    }
    return implode(" ", $c);
}
$h = "Hello my name is John";
$i = a($h);
echo $i;
