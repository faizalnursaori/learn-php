<?php

//Before
// class Product
// {
//     public string $id;
//     public string $name;
//     public int $price;
//     public int $quantity;

//     public function __construct(string $id, string $name, int $price, int $quantity)
//     {
//         $this->id = $id;
//         $this->name = $name;
//         $this->price = $price;
//         $this->quantity = $quantity;
//     }
// }

//After
class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $quantity
    ) {}
}

$product = new Product(id: "1", name: "Bakso Sapi", price: 100, quantity: 1);
var_dump($product);

echo $product->name . PHP_EOL;
