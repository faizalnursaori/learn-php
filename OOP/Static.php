<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

//Error: Accessing static property Helper\MathHelper::$name as non static
// $mathHelper = new MathHelper();
// echo $mathHelper->name . PHP_EOL;

//Untuk akses static gunakan
echo MathHelper::$name . PHP_EOL; //Result MathHelper

//reassign property static
MathHelper::$name = "Faizal";
echo MathHelper::$name . PHP_EOL;  //Result Faizal

$result = MathHelper::sum(10, 10, 10, 10);
echo "Result: $result" . PHP_EOL;
