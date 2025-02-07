<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone() //Milih mana property yang ga bakal dibawa
    {
        unset($this->sample); //Hapus property menggunakan unset
    }

    public function __toString(): string
    {
        return "Student IO: $this->id, Name: $this->name, Value: $this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(", ", $arguments);
        echo "Invoke student with argument $join" . PHP_EOL;
    }
}
