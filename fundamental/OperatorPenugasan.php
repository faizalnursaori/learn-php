<?php

//Assignment operator

//$a += b => $a = $a + b
//$a -= b => $a = $a - b
//$a *= b => $a = $a * b
//$a /= b => $a = $a / b
//$a %= b => $a = $a % b

$total = 0;

$friedRice = 10000;
$friedChicken = 10000;
$orangeJuice = 7000;

$total += $friedRice;
$total += $friedChicken;
$total += $orangeJuice;

var_dump($total);
