<?php

echo <<<bio
02 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Ternary Operator\n(Menggunakan kata kunci ? dan : )\n...........\n\n";

echo "Contoh tanpa Ternary Operator\n...........\n\n";

$jkelamin = "Laki-Laki";
$halo = null;

if ($jkelamin == "Laki-Laki") {
	$halo = "Punteun Kang!";
} else {
	$halo = "Punteun Teh!";
}

echo $halo . PHP_EOL . PHP_EOL;

echo "Contoh dengan Ternary Operator\n...........\n\n";
$jkelamin = "Laki-Laki";
$halo = $jkelamin == "Laki-Laki" ? "Punteun Kang!" : "Punteun Teh!";
echo $halo . PHP_EOL . PHP_EOL;

