<?php

namespace Data\Trait;

trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}
trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hallo" . PHP_EOL;
        } else {
            echo "Hallo $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    abstract public function run(): void;
}


trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
        goodBye as private;
        hello as protected;
    }
}

class Person
{
    use All;

    function run(): void
    {
        echo "Person $this->name is running " . PHP_EOL;
    }
}
