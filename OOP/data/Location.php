<?php

namespace Data;

abstract class Location //Kelas ini hanya bisa menjadi parent class
{
    public string $name;
}


class City extends Location {}
class Province extends Location {}
class Country extends Location {}
