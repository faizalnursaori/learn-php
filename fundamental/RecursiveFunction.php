<?php

//Recursive function adalah function yang memanggil function itu sendiri

function factorialRecursive(int $value): int{
    if($value == 1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(5));