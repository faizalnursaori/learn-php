<?php

// Deklarasi namespace "Data" untuk mengorganisir kode dan menghindari konflik nama kelas
namespace Data;

// Mengimpor file "Animal.php" yang kemungkinan berisi definisi kelas Animal, Cat, dan Dog
require_once "Animal.php";

/**
 * Interface AnimalShelter
 * Interface ini mendefinisikan metode adopt() yang harus diimplementasikan oleh semua kelas turunannya.
 * Metode ini menerima parameter nama hewan dan mengembalikan objek bertipe Animal.
 */
interface AnimalShelter
{
    function adopt(string $name): Animal;
}

/**
 * Class CatShelter
 * Implementasi dari interface AnimalShelter untuk mengadopsi kucing.
 */
class CatShelter implements AnimalShelter
{
    /**
     * Implementasi metode adopt() khusus untuk kucing.
     * Mengembalikan objek Cat dengan nama yang diberikan.
     */
    public function adopt(string $name): Cat
    {
        $cat = new Cat(); // Membuat objek Cat baru
        $cat->name = $name; // Menetapkan nama kucing
        return $cat; // Mengembalikan objek kucing
    }
}

/**
 * Class DogShelter
 * Implementasi dari interface AnimalShelter untuk mengadopsi anjing.
 */
class DogShelter implements AnimalShelter
{
    /**
     * Implementasi metode adopt() khusus untuk anjing.
     * Mengembalikan objek Dog dengan nama yang diberikan.
     */
    public function adopt(string $name): Dog
    {
        $dog = new Dog(); // Membuat objek Dog baru
        $dog->name = $name; // Menetapkan nama anjing
        return $dog; // Mengembalikan objek anjing
    }
}
