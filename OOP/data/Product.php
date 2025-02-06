<?php

class Product
{
    //Kalau private cuma bisa diakses di kelas yang sama
    //Kalau protected bisa diakses di turunannya
    //Kalau ga set visibilitynya adalah public
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        //Private masih bisa diakses karena masih satu class
        $this->name =  $name; //Mengubah properti name menjadi name yang di parameter
        $this->price = $price; //Mengubah properti price menjadi price yang di parameter
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function getInfo()
    {
        echo "Name : $this->name" . PHP_EOL;
        echo "Name : $this->price" . PHP_EOL;
    }
}
