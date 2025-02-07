<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Faizal";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Faizal";
$student2->value = 100;

var_dump($student1 == $student2); //Kalau propertynya sama semua dia hasilnya true
var_dump($student1 === $student2); //Hasilnya false karena student1 dan student2 adalah object yang berbeda di memory
