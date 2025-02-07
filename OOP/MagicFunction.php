<?php

require_once "data/Student.php";

//__toString => Representasi string sebuah object

$student = new Student();
$student->id = "1";
$student->name = "Faizal";
$student->value = 100;
$student->setSample("XXX");

$string = (string)$student;
echo $string . PHP_EOL; //Result nya jadi "Student IO: 1, Name: Faizal, Value: 100" => string

//Atau bisa langsung 
echo $student . PHP_EOL;

//__invoke() => function yang dieksekusi ketika object yang dibuat dianggap sebuah function

$student1 = new Student();
$student1->id = "1";
$student1->name = "Faizal";
$student1->value = 100;

$student1(1, "Izal", "Eko");
