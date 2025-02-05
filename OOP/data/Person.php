<?php

class Person{
    const AUTHOR = "Faizal";

    var string $name;
    var? string $address; //Nullable atau jadi bisa optional atau jadi bisa kosong
    var string $country = "Indonesia"; //Set default value

    function __construct(string $name, ?string $address ){ //Constructor
        $this-> name = $name; //Mengubah properti name menjadi name yang di parameter
        $this-> address = $address; //Mengubah properti address menjadi address yang di parameter
    }

// $name → Mengacu pada parameter yang diterima oleh fungsi sayHello (Budi).
// $this->name → Mengacu pada properti name milik objek Person (Faizal).
    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info(){
        echo "Author: " . self::AUTHOR . PHP_EOL; //Mengakses dalam class yang sama menggunakan self::
    }

    function __destruct(){
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}