<?php

echo <<<bio
15 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Increment dan Decrement\n...........\n\n";


$a = 10;
$a++; //post increment

$c = 4;
$c--; //post decrement


$x = 5;
++$x; //pre increment

$k = 30;
--$k; //pre decrement

echo "post increment\n";
echo "a = 10\n";
echo "a++ = ", var_dump($a), "\n\n";

echo "post decrement\n";
echo "c = 4\n";
echo "c-- = ", var_dump($c), "\n\n";

echo "pre increment\n";
echo "x = 5\n";
echo "++x = ", var_dump($x), "\n\n";

echo "pre decrement\n";
echo "k = 30\n";
echo "--k = ", var_dump($k), "\n\n";
