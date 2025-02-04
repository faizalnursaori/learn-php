<?php

//Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
//Ketika mengubah isi value dari reference maka secara otomatis value variable aslinya pun berubah

$name = "Faizal";

$otherName = &$name; //$otherName akan reference ke $name
$otherName = "Budi";

echo $name . PHP_EOL;

function increment(int &$value){ //Menggunakan reference
    $value++;
}

$counter = 1;
increment($counter); //Jika tidak menggunakan reference hasilnya akan 1
echo $counter . PHP_EOL;