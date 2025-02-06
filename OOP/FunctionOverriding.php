<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Faizal";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "Nursaori";
$vp->sayHello("Rahmat");
