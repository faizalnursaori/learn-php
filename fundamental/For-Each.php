<?php

//Menggunakan for loop
$brother = ["Kaka", "Abi", "Izal"];

for($i = 0; $i < count($brother); $i++){
    echo "Hello $brother[$i]" . PHP_EOL;
}

//Menggunakan for each
$names = ["Faizal", "Rahmat", "Nursaori"];

foreach($names as $name){
    echo "Hello $name" . PHP_EOL;
}

//Jika butuh index
foreach($names as $index => $name){
    echo "Data ke-$index = $name" . PHP_EOL;
}

//Key value
$person = [
    "first_name" => "Faizal",
    "last_name" => "Nursaori"
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}