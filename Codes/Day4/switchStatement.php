<?php

echo <<<bio
02 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Switch Statement\n(Gunakan Switch ketika perbandingan hanya berupa ==)\n...........\n\n";

//Contoh : $nilai == 'A';

$nilaihamba = 'B';

switch ($nilaihamba) {
	case 'A':
		echo "Anda Hebat\n\n";
		break;
	case 'B': //bisa digabung jika statementnya sama
	case 'C':
		echo "Anda Biasa\n\n";
		break;
	default:
		echo "Anda Payah\n\n";
		break;
}

echo "Syntax Alternatif\n...........\n\n";

$nilaihamba = 'C';

switch ($nilaihamba) :
	case 'A':
		echo "Anda Hebat\n\n";
		break;
	case 'B': //bisa digabung jika statementnya sama
	case 'C':
		echo "Anda Biasa\n\n";
		break;
	default:
		echo "Anda Payah\n\n";
		break;
endswitch;