<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    function run(): void
    {
        echo "Cat this $this->name is runnig " . PHP_EOL;
    }

    function eat(AnimalFood $animalFood): void
    {
        echo    "cat is eating " . PHP_EOL;
    }
}


class Dog extends Animal
{
    function run(): void
    {
        echo "Dog this $this->name is runnig " . PHP_EOL;
    }

    function eat(Food $animalFood): void
    {
        echo    "dog is eating " . PHP_EOL;
    }
}
