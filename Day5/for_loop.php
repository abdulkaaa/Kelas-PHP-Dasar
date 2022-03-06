<?php

echo <<<bio
06 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "For Loop\n(Perulangan)\n...........\n\n";

echo "Perulangan tanpa henti\n...........\n\n";

echo <<<loop
//	for ( ; ; ){ 
//	    echo "Ini contoh for loop";
//	}
//	menghentikan looping dengan ctrl+c


loop;

echo "Perulangan dengan kondisi\n...........\n\n";

$ulangi = 1;
for (; $ulangi <= 5;) { 
	echo "Hai Abdul ke- $ulangi \n\n";
	$ulangi++;
}

echo "Perulangan dengan init statement\n...........\n\n";

for ($ulangi = 1; $ulangi <= 5;) { 
	echo "Hai Abdul ke- $ulangi \n\n";
	$ulangi++;
}

echo "Perulangan dengan post statement\n...........\n\n";

for ($ulangi = 1; $ulangi <= 5; $ulangi++) { 
	echo "Hai Abdul ke- $ulangi \n\n";
}

echo "Syntax Alternatif For Loop\n...........\n\n";

for ($ulangi = 1; $ulangi <= 5; $ulangi++) : 
	echo "Hai Abdul ke- $ulangi \n\n";
endfor;

