<?php
interface HelloWord
{
    function sayHello(): void;
}

// Biasanya seperti ini
// class SampleHelloWord implements HelloWord
// {
//     function sayHello(): void
//     {
//         echo "hello word" . PHP_EOL;
//     }
// }
// $sample = new SampleHelloWord();
// $sample->sayHello();

// Anonymus Class
$helloWord = new class("Eko") implements HelloWord
// $helloWord = new class implements HelloWord
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "hello word $this->name;" . PHP_EOL;
    }
};

$helloWord->sayHello();
