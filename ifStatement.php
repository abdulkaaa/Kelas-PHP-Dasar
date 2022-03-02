<?php

echo <<<bio
02 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "If Statement\n...........\n\n";

$nilaiku = 90;
$absenku = 100;

if ($nilaiku >= 60 && $absenku >= 75) {
	echo "Nilaimu = $nilaiku \n";
	echo "Selamat Kamu Lulus!\n\n";
}

echo "else Statement\n...........\n\n";

$nilaiku = 59;
$absenku = 90;

if ($nilaiku >= 60 && $absenku >= 75) {
	echo "Nilaimu = $nilaiku \n";
	echo "Selamat Kamu Lulus!\n";
} else {
	echo "Nilaimu = $nilaiku \n";
	echo "Kamu Tidak Lulus!\n\n";
}

echo "Else If Statement\n...........\n\n";

$nilaiku = 77;
$absenku = 90;


if ($nilaiku >= 80 && $absenku >= 75) {
	echo "Nilai       = $nilaiku \n";
	echo "Nilai Huruf = A \n";
	echo "Selamat Kamu Lulus!\n";
} else if ($nilaiku >= 60 && $absenku >= 75) {
	echo "Nilai       = $nilaiku \n";
	echo "Nilai Huruf = B \n";
	echo "Selamat Kamu Lulus!\n\n";
} else {
	echo "Nilaimu = $nilaiku \n";
	echo "Kamu Tidak Lulus!\n\n";
}

echo "Syntax Alternatif\n...........\n\n";

$nilaiku = 79;
$absenku = 90;


if ($nilaiku >= 80 && $absenku >= 75) :
	echo "Nilai       = $nilaiku \n";
	echo "Nilai Huruf = A \n";
	echo "Selamat Kamu Lulus!\n";
elseif ($nilaiku >= 60 && $absenku >= 75) :
	echo "Nilai       = $nilaiku \n";
	echo "Nilai Huruf = B \n";
	echo "Selamat Kamu Lulus!\n\n";
else :
	echo "Nilaimu = $nilaiku \n";
	echo "Kamu Tidak Lulus!\n\n";
endif;

