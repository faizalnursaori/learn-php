<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }


    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "",)
    {   //Idealnya tetep manggil constructor dari parent, biar code yang ada di parent bisa dieksekusi
        parent::__construct($name, "VP"); //Override constructor
    }

    //Kalau override function parameternya harus sama, kalau ga sama nanti ada warning
    function sayHello(string $name): void //Ini override function dari parentnya
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
