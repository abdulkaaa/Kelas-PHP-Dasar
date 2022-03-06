<?php

echo <<<bio
06 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "While Loop\n(Perulangan)\n...........\n\n";

$ulangi = 1;
while ($ulangi <= 5) { 
	echo "Hai Abdul ke- $ulangi \n\n";
	$ulangi++;
}

echo "Syntax Alternatif While Loop\n...........\n\n";

$ulangi = 1;
while ($ulangi <= 5) : 
	echo "Hai Abdul ke- $ulangi \n\n";
	$ulangi++;
endwhile;


