<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void; //Kalau mau pake abstract di trait, wajib di override
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
        // hello as private;
        // goodBye as private;
    }
}

class Person
{
    use All; //Trait inheritance

    public function run(): void
    {
        echo "Person $this->name is Running" . PHP_EOL;
    }

    public function goodBye(?string $name): void
    {
        echo "Goodbye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }

    //Trait akan teroverride oleh class 
    //Parent akan teroverried oleh trait. Trait akan teroverride oleh child class
}
