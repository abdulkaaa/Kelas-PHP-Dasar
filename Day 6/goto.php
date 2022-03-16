<?php

echo <<<bio
16 Maret 2022
Muhamad Abdul Karim
-------------------


bio;

echo "Goto Operator\n...........\n";

echo <<<bandc
 - Digunakan untuk melompat dari satu line code
   ke line code yang lain.
...................................................


bandc;

//contoh sederhana
goto satu;
echo "Halo dua\n\n";

satu:
echo "Halo satu\n\n";

//contoh lebih complex
$ulangi = 1;
while (true) {    //perulangan tanpa henti 
  echo "Hai Abdul ke- $ulangi \n\n";
  $ulangi++;

  if ($ulangi > 5) {  //menghentikan perulangan
    goto end;
  }
}

end:
echo "Perulangan selesai\n\n";