<?php

echo <<<bio
02 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Null Coalescing Operator\n(Menggunakan tanda ?? )\n...........\n\n";

echo "Contoh tanpa Null Coalescing Operator\n...........\n\n";
$dataku = [];

if (isset($dataku['action'])) {
	$action = $dataku['action'];
} else {
	$action = 'nothing';
}

echo $action . PHP_EOL . PHP_EOL;

echo "Contoh dengan Null Coalescing Operator\n...........\n\n";
$dataku = [];
$action = $dataku['action'] ?? 'nothing';
echo $action . PHP_EOL . PHP_EOL;

