<?php

echo <<<bio
16 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Function\n...........\n";

echo <<<bandc
 - Block code program yang akan berjalan saat dipanggil.
 - Membuat function bisa dengan:
    1. kata kunci function
    2. nama function
    3. kurung ()
    4. block code {}
...................................................


bandc;

function bilangHalo() {
  echo "Halo function\n\n";
}

bilangHalo();
bilangHalo();
bilangHalo();
