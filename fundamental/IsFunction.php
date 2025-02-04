<?php

//Is Function digunakan unuk checkking data type dengan hasil boolean

$data = "sample";
//is_string() => Apakah tipe data string
var_dump(is_string($data));

//is_bool() => Apakah tipe data boolean
var_dump(is_bool($data));

//is_int() => Apakah tipe data number
var_dump(is_int($data));

//is_float() => Apakah tipe data floating number
var_dump(is_float($data));

//is_array() => Apakah tipe data array
var_dump(is_array($data));

//is_callable() => Apakah tipe data callable
var_dump(is_callable($data));