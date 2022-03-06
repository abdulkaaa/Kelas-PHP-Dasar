<?php

echo <<<bio
06 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "For Each\n...........\n";

echo <<<bandc
 - Digunakan untuk mengakses seluruh data di array
   secara otomatis.
...................................................


bandc;

echo "Akses data array Tanpa For Each\n...........\n";

$nama = ["Mochammad", "Abdul", "Karim"];

for ($a = 0; $a < count($nama); $a++) { 
  echo "Halo $nama[$a] \n\n";
}

echo "Akses data array Dengan For Each\n...........\n";

$names = ["Mochammad", "Abdul", "Karim"];

foreach ($names as $name) { 
  echo "Halo $name \n\n";
}

echo "For Each dengan Key\n...........\n";

$orang = [
  "nama_depan" => "Mochammad", 
  "nama_tengah" => "Abdul", 
  "nama_belakang" => "Karim"
];

foreach ($orang as $key => $value) {
  echo "$key : $value \n\n";
}
