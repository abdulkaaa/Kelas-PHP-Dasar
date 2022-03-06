<?php

echo <<<bio
11 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

$name = "Abdul";
$age = 20;

echo "Nama : ";
echo $name;
echo "\n";
echo "Umur : ";
echo $age;

echo "\n\nVariable Variables\n\n";

$$name = "manusia";

echo "Nama : ";
echo $name;
echo "\n";
echo $name, " adalah seorang ", $$name, ".";
echo "\n";