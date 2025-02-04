<?php

function sayHello(){
    echo "Hello World" . PHP_EOL;
}

sayHello();
sayHello();

//Function argument
function sayHi($name){
    echo "Hello $name" . PHP_EOL;
}

sayHi("Faizal");
sayHi("Ganteng");

//Function default argument value
function defaultName($name = "Budi"){
    echo "Halo dari $name" . PHP_EOL;
}

defaultName();

//Type declaration
function sum(int $a, int $b){
    $total = $a + $b;
    echo "$a + $b = $total" . PHP_EOL;
}

sum(100,100);
sum("100","100"); //Jadi jika kita input string maka otomatis akan dicoba diubah menjadi intt
sum(true,false); //Jadi jika kita input string maka otomatis akan dicoba diubah menjadi intt
// sum([],[]); //Kalau ini bakal error karena ga ada nilainya dan ga bisa dikonversi

//Argument list
function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
$values = [1,2,3,4,6];

sumAll(1,2,3,4,5);
sumAll(...$values); //Kalau udah ada data arraynya pake ini
