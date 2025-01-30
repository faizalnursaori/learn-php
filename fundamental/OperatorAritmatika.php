<?php

//Operator aritmatika
//+$value => positif
//-$value => negatif
//$value + $value=> penambahan
//$value - $value=> pengurangan
//$value * $value=> perkaliam
//$value / $value=> pembagian
//$value % $value=> modulus (sisa bagi)
//$value ** $value=> perpangkatan

$a = 10;
$b = 10;

$resultPlus = $a + $b;
var_dump($resultPlus);

$resultNegative = -$resultPlus;
var_dump($resultNegative);

$resultMultiplication = $a * $b;
var_dump($resultMultiplication);

$resultModulo = $a % $b;
var_dump($resultModulo);

$resultPangkat = $a ** $b;
var_dump($resultPangkat);