<?php

//Constructor adalah function yang akan dipanggil saat pertama kali object dibuat
require_once "data/Person.php";

$person = new Person("Faizal", "Karawang"); //Parameter (name, address?) dari constructor
var_dump($person);