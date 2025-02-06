<?php

namespace Data;

//Interface sama kayak abstract, cuma ini langsung implementasi ke satu class menggunakan interface

interface Car
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4 . PHP_EOL;
    }
}
