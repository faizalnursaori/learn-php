<?php

//Kalau datanya biar ga diubah gausah buat setter
//Kalau datanya ga boleh diambil dari luar ga usah buat getternya

class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void //Gettter selain boolean pake get
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool //Getter di boolean pake is
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
