<?php

//Single Quote

echo 'Nama : ';
echo 'Faizal Nursaori';
echo "\n"; // Kalau ga pake \n nanti resultnya jadi memanjang

//Double Quote
echo "Nama : ";
echo "Faizal Nursaori";
echo "\n";

//Pro pakai double quote biar \n bisa dipakai

//Heredoc
//Membuat string yang panjang

echo <<<LONGSTRING

Ini adalah string yang panjang menggunakan Heredoc
Ga perlu ngetik enter lagi secara manual
Bisa "quote" juga

LONGSTRING;


//NOWDOC
echo <<<'LONGSTRING'

Ini juga string buat ngetik panjang dan tanpa enter
tapi ini tidak bisa digunakan parsing
bedanya ini pake single quote
LONGSTRING;