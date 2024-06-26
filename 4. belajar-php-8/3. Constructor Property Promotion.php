<?php

/**
 * Kdang kita sering memuat property sekaligus mengisi property tersebut menggunakan constructor
 * https://wiki.php.net/rfc/constructor_promotion
 */
class Product
{
    function __construct(
        public string $id,
        public string $name,
        public int $price = 0,
        public int $qty = 0,
        private bool $expensive = false,
    ) {
    }
}

$product = new Product(id: "1", name: "Nendi", price: 1000, qty: 10, expensive: true);
var_dump($product);
