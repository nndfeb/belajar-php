<?php

// Object
class Person
{
    // constant tidak bisa di edit atau dirubah imutable
    const AUTHOR = "Programer Zaman Now";

    // Propertis
    var string $name;
    var ?string $address = null; // nullable gunakan tanda ? 
    var string $country = "Indoneisa"; // default value

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }


    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function __destruct()
    {
        echo "Obejct person $this->name is destroyed" . PHP_EOL;
    }
}



class Orang
{
}
class Contoh
{
}
