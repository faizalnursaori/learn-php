<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//Before Import Group
// use Data\One\Conflict;
// use Data\One\Dummy;
// use Data\One\Sample;

//Import Group
use Data\One\Conflict{Conflict, Dummy, Sample};
use function Helper\{helpme};

$conflict = new Conflict();
$dummy = new Dummy();
$sample = new Sample;