<?php

// $a + $b (union) => Menggabungkan array $a dan $b
$firstName = [
    "first_name" => "Faizal"
];

$lastName = [
    "last_name" => "Nursaori"
];

$fullName = $firstName + $lastName;

var_dump($fullName);

// $a == $b (equality) => true jika $a dan $b memiliki key-value yang sama
// $a === $b (identity) => true jika $a dan $b memiliki key-value dan posisi yang sama
$a = [
    "first_name" => "Faizal",
    "last_name" => "Nursaori"
];

$b = [
    "last_name" => "Nursaori",
    "first_name" => "Faizal"
];

var_dump($a==$b); // (true) Walaupun beda posisi yang penting key-value sama true
var_dump($a===$b); // (false) Posisi harus sama

// $a != $b (inequality) => true jika $a dan $b tidak sama
// $a !== $b (non-identity) => true jika $a dan $b tidak identik
$array1 = [
    "a" => 1,
    "b" => 2
];

$array2 = [
    "b" => 3,
    "a" => 1
];

var_dump($array1 != $array2); //(true) karena nilai 'b' berbeda
var_dump($array1 !== $array2); //(true) karena urutan berbeda