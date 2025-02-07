<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

// Membuat objek CatShelter dari namespace Data
$catShelter = new \Data\CatShelter();

// Mengadopsi kucing dengan nama "Luna"
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

// Membuat objek DogShelter dari namespace Data
$dogShelter = new \Data\DogShelter();

// Mengadopsi anjing dengan nama "Doggy"
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food());
