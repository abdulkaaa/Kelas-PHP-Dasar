<?php

echo <<<bio
11 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Data Null\n......\n";

$name = "Abdul";
$age = null;

echo "Nama : ", $name, "\n";
echo "Umur : ", $age, "\n\n......\n";

$name = null;
$age = 20;
echo "Nama : ", $name, "\n";
echo "Umur : ", $age, "\n......\n";

//Mengecek apakah variabel ber nilai null
echo "Apakah variabel 'name' bernilai null? ";
var_dump(is_null($name));
echo "\n";

//Menghapus variabel
//Untuk menghapus variabel dapat menggunakan unset($variable)

//Mengecek sebuah variabel itu ada dan memiliki nilai (tidak null), dapat menggunakan isset($variable)
echo "Apakah variabel 'age' ada dan bernilai? ";
var_dump(isset($age));