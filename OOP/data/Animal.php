<?php

namespace Data;

abstract class Animal
{
    public string $name;

    abstract public function run(): void; //Siapapun yang menggunakan subclass pada class ini wajib memiliki function ini
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is barking" . PHP_EOL;
    }
}
