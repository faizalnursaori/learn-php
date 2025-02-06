<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Faizal");
var_dump($company);

$company->programmer = new BackEndProgrammer("Faizal");
var_dump($company);

$company->programmer = new FrontEndProgrammer("Faizal");
var_dump($company);

sayHelloProgrammer(new Programmer("Faizal"));
sayHelloProgrammer(new BackEndProgrammer("Faizal"));
sayHelloProgrammer(new FrontEndProgrammer("Faizal"));
