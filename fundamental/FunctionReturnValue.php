<?php

//Return value
function returnSum(int $a, int $b){
    return $a + $b;
}

$total = returnSum(10, 10);
var_dump($total);

//Return type declaration
function getFinalValue(int $value): string{ //Kalau returnnya ada yang input int akan otomatis dikonversi ke string
    if($value >= 80){
        return "A";
    } else if($value >= 70){
        return "B";
    } else if($value >= 60){
        return "C";
    } else if($value >= 50){
        return "D";
    } else {
        return "Anda tidak lulus";
    }
}

$score = getFinalValue(40);
var_dump($score);

