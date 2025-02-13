<?php

function sayHelo(string $first, string $middle, string $last)
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

//without named argument
sayHelo("Faizal", "Rahmat", "Nursaori");

//with named argument
sayHelo(last: "Nursaori", middle: "Rahmat", first: "Faizl");
