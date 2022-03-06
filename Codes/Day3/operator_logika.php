<?php

echo <<<bio
15 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Operator Logika\n...........\n";

$a = true;
$b = false;
$c = true;

var_dump($a && $b);
var_dump($a && $c);
var_dump($b || $c);
var_dump($c xor $a);
var_dump(!$b && $a);
echo "\n";
