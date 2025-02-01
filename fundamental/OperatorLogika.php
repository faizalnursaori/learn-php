<?php

//Operator logika kurang lebih sama kayak Javascript

//$a && $b / $a and $b => true jika kedua nilai true
$a = true;
$b = true;
var_dump($a && $b);

//$a || $b / $a or $b => true jika salah satunya atau keduanya true
$a = true;
$b = false;
var_dump($a || $b);

//!$a reverse nilai boolean
$a = false;
var_dump(!$a);

//$a xor $b => true jika salah satu true, tapi tidak keduanya
$a = true;
$b = false;
var_dump($a xor $b);