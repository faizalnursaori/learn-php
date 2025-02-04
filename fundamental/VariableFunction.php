<?php

function foo(){
    echo "INI FOO" . PHP_EOL;
}

function bar(){
    echo "INI BAR" . PHP_EOL;
}

$namaFunction = "foo"; //Jadi value ini disesuain sama function yang mau dipanggil
$namaFunction();

$namaFunction = "bar";
$namaFunction();

//USES CASE
function filterName(string $name, $filter){ //Mengirim function ke dalam argument
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

filterName("Faizal", "strtoupper");
filterName("Faizal", "strtolower");