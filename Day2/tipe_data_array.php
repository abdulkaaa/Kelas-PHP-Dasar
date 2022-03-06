<?php

echo <<<bio
11 Februari 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Tipe Data Array\n.........\n\n";

//cara 1
$kelas = array('Dasar', 2022, 'PHP');
//cara 2
$bio = ["Abdul", "Muhamad", 20, "Karim"];

echo $kelas[2], " ", $kelas[0], " ", $kelas[1], "\n";
echo "Nama : ", $bio[1], " ", $bio[0], " ", $bio[3], "\n";
echo "Umur : ", $bio[2], "\n\n";

//Melihat detail array
//var_dump($kelas);
//var_dump($bio);

echo "Operasi Array\n.........\n\n";

//Mengubah value array
$bio[1] = "Muhammad";
echo "Nama : ", $bio[1], " ", $bio[0], " ", $bio[3], "\n";

//Menambah data/elemen array
$kelas[] = "Kelas";
echo "\n", $kelas[3], " ", $kelas[2], " ", $kelas[0], " ", $kelas[1], "\n";

//Menghapus data array
//unset($array[index])

//Mengetahui total data di array
echo "\nTotal elemen pada array 'kelas' : ", count($kelas), "\n\n";

echo "Array Sebagai Map\n.........\n\n";
//cara 1
$kelaslagi = array(
	"Kelas" => "PHP", 
	"Tahun" => 2022, 
	"Tingkat" => "Dasar"
);
//cara 2
$biolagi = [
	"Nama" => "Abdul Karim", 
	"Umur" => "20"
];

echo $kelaslagi["Kelas"], " ", $kelaslagi["Tingkat"], " ", $kelaslagi["Tahun"], "\n";
echo "Nama : ", $biolagi["Nama"], "\nUmur : ", $biolagi["Umur"], "\n\n";

echo "Array di dalam Array\n.........\n\n";
$biolagilagi = [
	"Nama" => "Abdul Karim", 
	"Umur" => "20",
	"Alamat" => [
		"Kota" => "Banana",
		"Provinsi" => "Jawa Selatan"
	]
];

echo "Nama : ", $biolagilagi["Nama"], "\nUmur : ", $biolagilagi["Umur"], "\n";
echo "Alamat : Kota ", $biolagilagi["Alamat"]["Kota"], ", Provinsi ", $biolagilagi["Alamat"]["Provinsi"], "\n\n";

