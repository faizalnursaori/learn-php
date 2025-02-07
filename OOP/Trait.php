<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Faizal");
$person->hello("Budi");

$person->name = "Nursaori";
var_dump($person);

$person->run();
