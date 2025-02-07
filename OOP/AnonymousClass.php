<?php

interface HelloWorld
{
    function sayHello(): void;
}

// class SampleHelloWorld implements HelloWorld
// {
//     public function sayHello(): void
//     {
//         echo "Hello World" . PHP_EOL;
//     }
// }

//Menggunakan Anonymous Class

$helloWorld = new class("Faizal") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
