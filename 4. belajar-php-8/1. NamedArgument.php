<?php

function sayHello(string $fisrt, string $middle = "", string $last): void
{
    echo "Hello $fisrt $middle $last" . PHP_EOL;
}

// withput named argument
sayHello("Eko", "Kurnawan", "Khandey");

// with named argument
sayHello(last: "Khandey", fisrt: "Eko", middle: "Kurnawan");
sayHello(fisrt: "Eko", last: "Khandey");
