<?php

//Array adalah kumpulan data yang disimpan dalam satu variabel
//Operasi array
//$array[index]  //Mengakses data di array pada nomor index
//$array[index] = value //Re-assign value array
//$array[] = value //Menambah data array pada posisi paling belakang
//unset($array[index]) //Menghapus data di array, index otomatis hilang dari array
//count($array) //Mengambil total data di array

$array = ["Faizal", 24, true];
var_dump($array);
var_dump($array[0]);
$array[1] = "Rahmat";
var_dump($array); //Result ["Faizal", "Rahmat", true]
unset($array[1]);
var_dump($array); //Result ["Faizal", true] => indexnya jadi 0 dan 2 karnea 1 dihapus
$array[] = "Nursaori";
var_dump($array); //Result ["Faizal, true, "Nursaori"] => index 0, 2, 3 nambahin index ke paling belakang
var_dump(count($array)); //result 3

//Array sebagai Map
//Sebenernya defaultnya pake index, tapi kalau mau jadi Map diganti keynya
//Key dan Value
$user = [
    "id" => 1,
    "name" => "Faizal",
    "role" => "Admin"
];
var_dump($user);
//Mengambil data pada Map
var_dump($user["name"]); //Panggil key nya

//Nested array
$biodata = [
    "name" => "Faizal",
    "age" => 24,
    "address" => [
        "city" => "Karawang",
        "province" => "West Java"
    ]
];
var_dump($biodata);
var_dump($biodata["address"]["city"]); //Mengambil data dalam nested array