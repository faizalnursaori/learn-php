<?php

//Base 10
echo "Decimal : ";
var_dump(1234);

//Base 8
echo "Octal : ";
var_dump(0123); //Dimulai dari 0

//Base 16
echo "Hexadecimal : ";
var_dump(0x1A); //Dimulai dari 0x

//Base 2
echo "Binary : ";
var_dump(0b11111111); //Dimulai dari 0b

echo "Underscore in number :" ;
var_dump(1_234_567_890); //Untuk readibility angka

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation plus (1.2x1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation plus (7x0.01) : ";
var_dump(7e-3);

/*
Pada sistem 64-bit, batas maksimum integer adalah sekitar 9.2 quintillion (2^63-1), 
dan batas minimum adalah sekitar -9.2 quintillion (-(2^63)).
*/