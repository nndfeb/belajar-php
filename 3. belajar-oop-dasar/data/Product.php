<?php
class Product
{
    protected string $name;
    protected int $price;
    // private string $name;
    // private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }
}


class ProductDummy extends Product
{
    function info()
    {
        echo "Name $this->name" . PHP_EOL;
    }
}
