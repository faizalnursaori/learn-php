<?php

$name = "Faizal";
$name = null; //Menghapus value dari name;

$age = 24;

echo $name;
echo $age;

//Method untuk cek tipe data null
echo "\n";
echo "Is name null : "; //Hasilnya 1 artinya true, kalau 0 artinya false
echo is_null($name);
echo "\n";

//Cara lain cek tipe data null
var_dump(is_null($name));

//Menghapus total variable

$hapus = "Hapus ini";
unset($hapus);

echo $hapus; //Bakal error

//Function untuk cek variablenya ada dan hasilnya tidak null
var_dump(isset($hapus));