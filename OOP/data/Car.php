<?php

namespace Data;

//Interface sama kayak abstract, cuma ini langsung implementasi ke satu class menggunakan implements
interface hasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends hasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, isMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4 . PHP_EOL;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
