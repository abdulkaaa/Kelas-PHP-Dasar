<?php

echo <<<bio
06 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Break dan Continue\n...........\n";

echo <<<bandc
 - Break untuk menghentikan seluruh perulangan
 - Continue untuk menghentikan perulangan saat ini
   dan melanjutkan ke perulangan selanjutnya.
...................................................


bandc;

echo "Continue\n...........\n";

for ($ulangi = 1; $ulangi <= 12 ; $ulangi++) { 
  if ($ulangi % 2 == 1) {
    continue;
  }
  echo "Angka $ulangi termasuk bilangan genap.\n\n";
}

