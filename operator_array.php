<?php

echo <<<bio
15 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Operator Array\n...........\n\n";

echo "Union (+)\n...........\n";
$first = [
	"first_name" => "Abdul"
];

$last = [
	"last_name" => "Karim"
];

echo <<<ar
Terdapat dua array yaitu first dan last
first = [
	"first_name" => "Abdul"
];

last = [
	"last_name" => "Karim"
];


ar;

//union first dan last
$full = $first + $last;
echo "Setelah dilakukan nion : \n";
var_dump($full);
echo "\nMy Full Name is ", $full["first_name"], " ", $full["last_name"],  "\n\n";

echo "Equality (==) dan Identity (===)\n...........\n";
$f = [
	"first_name" => "Abdul", 
	"last_name" => "Karim"
];

$g = [
	"last_name" => "Karim", 
	"first_name" => "Abdul"	
];

echo <<<ray
Terdapat dua array yaitu f dan g
f = [
	"first_name" => "Abdul", 
	"last_name" => "Karim"
];

g = [
	"last_name" => "Karim", 
	"first_name" => "Abdul"	
];


ray;

echo "Equality (f == g) : \n", var_dump($f == $g), "\n";
echo "Identity (f === g) : \n", var_dump($f === $g), "\n";
