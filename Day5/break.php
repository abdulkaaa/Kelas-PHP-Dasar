<?php

echo <<<bio
06 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Break dan Continue\n...........\n";

echo <<<bandc
 - Break untuk menghentikan seluruh perulangan
 - Continue untuk menghentikan perulangan saat ini
   dan melanjutkan ke perulangan selanjutnya.
...................................................


bandc;

echo "Break\n...........\n";

$ulangi = 1;
while (true) {		//perulangan tanpa henti 
	echo "Hai Abdul ke- $ulangi \n\n";
	$ulangi++;

	if ($ulangi > 5) {	//menghentikan perulangan
		break;
	}
}



