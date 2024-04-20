<?php

require_once "data/Product.php";

$prod = new Product("Apple", 20000);
// echo $prod->name;
echo $prod->getName() . PHP_EOL;
echo $prod->getPrice();
