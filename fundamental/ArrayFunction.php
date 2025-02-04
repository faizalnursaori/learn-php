<?php

$data = [1,2,3,4,5,6,7,8,9,10];
$person = [
    "first_name" => "Faizal",
    "last_name" => "Nursaori"
];

//array_keys() => Mengambil semua keys milik array
var_dump(array_keys($person));  //Result "first_name" & "last_name"

//array_values() => Mengambil semua value milik array
var_dump(array_values($person)); //Result "Faizal" & "Nursaori"

//array_map => mengubah semuda data array dengan callback
$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

//sort() => mengurutkan array (ascending)
//rsort() => Mengurutkan array terbalik (descending)
rsort($data);
var_dump($data);

//shufle() => mengubah posisi data di array secara random
var_dump(shuffle($data));