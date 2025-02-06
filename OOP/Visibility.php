<?php

require_once "data/Product.php";

$product = new Product("Apple", 2000);

// echo $product->name . PHP_EOL; => akan Error karena akses private property

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$productDummy = new ProductDummy("Roti", 1000);
$productDummy->getInfo();
