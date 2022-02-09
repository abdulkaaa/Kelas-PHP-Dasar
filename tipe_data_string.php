<?php

echo '09 Februari 2022';
echo "\n";
echo 'Muhamad Abdul Karim';
echo "\n";
echo '-------------------';
echo "\n\n";

echo "09 Februari 2022\tMuhamad Abdul Karim\n";
echo "---------------------------------------------\n";

echo "heredoc - mirip double quote \n";
echo "heredoc - bisa parsing\n";
echo <<<CONTOH
Jadi ini contoh penulisan string pake metode heredoc.
Di sini penulisannya jadi lebih gampang untuk menulis tulisan yang panjang seperti paragraf.
Dan gak perlu banyak pakai "ENTER" manual untuk pindah baris baru.


CONTOH;

echo "nowdoc - mirip single quote\n";
echo "nowdoc - tidak bisa parsing\n";
echo <<<'CONTOH'
Jadi ini contoh penulisan string pake metode heredoc.
Di sini penulisannya jadi lebih gampang untuk menulis tulisan yang panjang seperti paragraf.
Dan gak perlu banyak pakai "ENTER" manual untuk pindah baris baru.


CONTOH;