<?php

$sayHello = function(string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Faizal");

//Anonymous function sebagai argument
function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Say good bye $finalName" . PHP_EOL;
}

sayGoodBye("Faizal", function(string $name){
    return strtoupper($name);
});

//Anonymous Function closure

$firstName = "Faizal";
$lastName = "Nursaori";

$helloName = function() use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$helloName();