<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer {}
class FrontEndProgrammer extends Programmer {}
class Company
{
    public Programmer $programmer;
}

//Type check pada Object menggunakan instanceof
function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackEndProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
