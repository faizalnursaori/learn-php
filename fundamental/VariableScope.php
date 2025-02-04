<?php

//tiga jenis scope => global, local, static

/*
Global scope
- Variable yang dibuat di luar function
- Variable scope global hanya dapat diakses di luar function
- Artinya, di dalam function kita tidak dapat mengakses variable yang berada di global scope

//Contoh
$name = "Faizal"; //Global Scope

function sayName(){ //Semua yang berada di luar function tidak bisa diakses di dallam function
    echo $name; //Error
}

sayName();

Global keyword
$name = "Faizal"; //Global Scope

function sayName(){ //Semua yang berada di luar function tidak bisa diakses di dallam function
    global $name // global keyword untuk mengakses global scope dari luar cunction    
    echo $name; 

    echo $GLOBALS["name"] . PHP_EOL; // Atau juga bisa gini
}

sayName();

*/

/*
Local Scope
- Variable yang dibuat di dalam function memiliki scope local
- Variable di scope local hanya bisa diakses dari dalam function itu sendiri
- Artinya variable tersebut tidak bisa diakses dari luar function ataupun function lain

function createName(){
    $name = "Faizal";
}
createName();
echo $name . PHP_EOL; //Error

*/

/*
Static Scope
- Secara default local variable itu siklus hidupnya hanya sebatas functionnya diekseskusi

//Contoh
function increment(){
    $counter = 1;

    echo "Counter = $counter" . PHP_EOL;

    $counter++
}
increment(); //Ketika dipanggil counter akan dieksekusi
increment(); //Ketika dipanggil lagi counter ini memangil counter yang baru
increment(); //Oleh karena itu siklus hidupnya hanya sebatas ketika function dipanggil
//Result 1

//Membuat agar siklus hidupnya terus menerus
function increment(){
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;

    $counter++
}
increment();
increment(); //Ketika dipanggil yang kedua kali, dicek terlebih dahulu apakah counter sebelumnya memiliki value?
increment();
Result 1, 2, 3

*/