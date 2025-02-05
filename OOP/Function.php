<?php
require_once "data/Person.php";

$person = new Person();

$person->name = "Faizal"; 
$person->sayHello("Budi");

// $name → Mengacu pada parameter yang diterima oleh fungsi sayHello(Budi).
// $this->name → Mengacu pada properti name milik objek Person(Faizal).

var_dump($person);

$person->info();