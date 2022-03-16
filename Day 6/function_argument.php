<?php

echo <<<bio
16 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Function Argument\n...........\n";

echo <<<bandc
 - Untuk mengirim informasi ke function
   yang ingin dipanggil.
 - Agument ditempatkan di dalam kurung ()
   saat deklarasi function.
...................................................


bandc;

function bilangHalo($nama) //nama sebagai argumen atau parameter
{
  echo "Halo $nama\n\n";
}

bilangHalo("Abdul");
bilangHalo("Karim");

// Default Argument Value
// Menentukan data default ketika tidak memasukan parameter saat memanggil function

function bilangHello($nama1 = "Abdul") //nama = Abdul sebagai default argument value
{
  echo "Halo $nama1\n\n";
}

bilangHello();
bilangHello("Karim");

echo "Type Declaration\n...........\n\n";

function kali(int $panjang, int $lebar)
{
   $luas = $panjang * $lebar;
   echo "Diketahui:\nPanjang = $panjang \nLebar = $lebar \n";
   echo "Luas Persegi Panjang = $luas \n\n";
}

kali(45, 80);
kali("45", "80");
kali(true, false);
//kali([], []); (error, tidak bisa dikonfersi)

echo "Variable-Length Argument List\n...........\n";
echo "- Untuk membuat argument menjadi array\n  tanpa manual mengirim array ke function.\n";
echo "- Ditempatkan di argument terakhir,\n  dengan penulisan menggunakan tanda ...(titik 3X)\n  sebelum nama argument\n\n";

function jumlahsemua(...$nilai)
{
   $total = 0;
   foreach ($nilai as $value) {
      $total += $value;
   }
   echo "Total " . implode(" + ", $nilai) . " = $total \n\n";
   //implode mengubah array menjadi string
}

jumlahsemua(30, 47, 27, 38, 40);
jumlahsemua(...[30, 47, 27, 38, 40]); //manual

//jika sudah memiliki array dan ingin mengubah jadi argument list:
$nilai = [30, 47, 27, 38, 40];
jumlahsemua(...$nilai);