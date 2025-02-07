<?php

trait A
{
    function doA(): void
    {
        echo "a" . PHP_EOL;
    }
    function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{

    function doA(): void
    {
        echo "A" . PHP_EOL;
    }
    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

class Sample
{
    //2. pake insteadof kalau ada conflit dalam trait
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

//1. Bakal conflict dan error
$sample = new Sample();
$sample->doA();
$sample->doB();
