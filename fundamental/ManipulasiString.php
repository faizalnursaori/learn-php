<?php

//Dot operator

//Cara lama
$name = "Faizal Nursaori";
echo "Name : ";
echo $name;
echo "\n";

//Menggunakan dot operator
$name = "Rahmat Faizal";
echo "Name : " . $name . PHP_EOL;

//Konversi ke Number dan sebaliknya
$valueString = (string)100; //Mengubah number ke string
var_dump($valueString);

$valueInt = (int)"100"; //Mengubah string ke number
var_dump($valueInt);

//Variable parsing
$name = "Faizal";
echo "Hello $name, selamat belajar" . PHP_EOL;

//Curly braces
$var = "Var";
echo "This is {$var}s" . PHP_EOL;