<?php

echo <<<bio
02 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "MANIPULASI STRING\n...........\n\n";

echo "Dot Operator (Menggabung 2 string)\n...........\n\n";

//PHP_EOL = enter

$name = "Muhamad Abdul Karim";
echo "Name : " . $name . PHP_EOL . PHP_EOL;

echo "Konversi ke Number dan Sebaliknya\n...........\n\n";

$nilaiString = (string)384827;
var_dump($nilaiString);

$nilaiInt = (int)"83948";
var_dump($nilaiInt);

$nilaiInt = (int)"jkfsdfr";
var_dump($nilaiInt); //data tidak valid akan return 0

$nilaiFloat = (float)4738;
var_dump($nilaiFloat);
echo "\n\n";

echo "Mengakses Karakter\n...........\n\n";

$nami = "Abdul";
echo $nami[0] . PHP_EOL;
echo $nami[1] . PHP_EOL;
echo $nami[2] . PHP_EOL;
echo $nami[3] . PHP_EOL;
echo $nami[4] . PHP_EOL . PHP_EOL;

echo "Variabel Parsing\n(Hanya ada di Heredoc/Double Quote)\n...........\n\n";

//panggil variaabel langsung dari dalam quote ("")
echo "Halo $name. Selamat datang di Kelas PHP Dasar.\n\n";

echo "Curly Brace ({})\n(Untuk menggabungkan variabel\ndengan string tanpa tambahan spasi)\n...........\n\n";

$buah = "banana";
echo "I ussualy eat {$buah}s for lunch.\n\n";

