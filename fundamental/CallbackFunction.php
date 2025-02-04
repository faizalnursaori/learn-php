<?php

//Callback adalah mekanisme sebuah function untuk memanggil function lainnya

function sayHello(string $name, callable $filter){
    $finalName =  call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

//Dapat menggunakan anon function atau arrow funcion
sayHello("Faizal", "strtoupper");
sayHello("Faizal", "strtolower");
sayHello("Faizal", function(string $name): string{
    return strtoupper($name);
});
sayHello("Faizal", fn($name) => strtolower($name)); 