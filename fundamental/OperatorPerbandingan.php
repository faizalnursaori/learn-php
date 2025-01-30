<?php

// ==	Sama dengan	$x == $y (tanpa memperhatikan tipe data)

$a = 10;
$b = "10";
var_dump($a == $b); //true

// ===	Identik	$x === $y harus memiliki tipe data yang sama

$a = 10;
$b = "10";
var_dump($a === $b); //false

// !=	Tidak sama dengan
$a = 10;
$b = "10";
var_dump($a != $b); //false (karena nilai sama)

// !==	Tidak identik
$a = 10;
$b = "10";
var_dump($a != $b); //true (karena tipe datanya berbeda)

//>	Lebih besar dari
$besar = 10;
$kecil = 5;
var_dump($besar > $kecil); //true karena 10 lebih dari 5

//>	lebih kecil dari
$besar = 10;
$kecil = 5;
var_dump($besar < $kecil); //false karena 10 lebih dari 5

// Spaceship Operator (<=>)
// -1 jika $x < $y, 0 jika $x == $y, 1 jika $x > $y
var_dump(5 <=> 10); // Output: -1 (karena 5 lebih kecil dari 10)
var_dump(5 <=> 5); // Output: 0 (karena 5 = 5)
var_dump(10 <=> 5); // Output: 1 (karena 10 lebih besar dari 5)