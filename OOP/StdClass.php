<?php

//mengonversi array menjadi objek
$array = [
    "firstName" => "Faizal",
    "middleName" => "Rahmat",
    "lastName" => "Nursaori"
];

$object = (object)$array;
var_dump($object);

echo "First Name : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

//mengonversi dari objek menjadi array

$arrayLagi = (array) $object;
var_dump($arrayLagi);
