<?php

require_once "data/Student.php";

//Cloning object
//Bisa digunakan untuk clonse seluruh property termasuk yang private

$student = new Student();
$student->id = "1";
$student->name = "Faizal";
$student->value = 100;
$student->setSample("XXX");
var_dump($student);

$student2 = clone $student;
var_dump($student2);


//$student => clone $student2 => $student2 => __clone()
//Jadi $student2 ngeclone dulu, lalu manggil function si __clone dan ngehapus property yang dipilih