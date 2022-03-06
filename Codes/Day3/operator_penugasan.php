<?php

echo <<<bio
15 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Operator Penugasan\n...........\n";

$TotalMahasiswa = 0;

$MhsAkuntansi = 430;
$MhsHukum = 500;
$MhsFarmasi = 200;

$TotalMahasiswa += $MhsAkuntansi;
$TotalMahasiswa += $MhsHukum;
$TotalMahasiswa += $MhsFarmasi;

echo "Total Mahasiswa = ", $TotalMahasiswa, " Orang.\n\n"; 
