<?php

class Example
{
    public string|int|bool $data; //Bisa assign berbagai type data menggunakan union
}

$example = new Example();
$example->data = "Faizal";
$example->data = 100;
$example->data = true;

function sampleFunction(string | array $data): string | array
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

sampleFunction("Faizal");
sampleFunction([]);
