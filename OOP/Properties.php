<?php
require_once "data/Person.php";

$person = new Person();
$person -> name = "Faizal";
$person -> address = "Bandung";
$person -> country = "Zimbabwe";

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;