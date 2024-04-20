<?php
function foo()
{
    echo "foo" . PHP_EOL;
}


function bar()
{
    echo "bar" . PHP_EOL;
}


$func_akan_dipanggil = "foo";
$func_akan_dipanggil();

$func_akan_dipanggil = "bar";
$func_akan_dipanggil();

// penggunaan variable function

function sayHello(string $name, $filter)
{
    $final_name = $filter($name);
    echo "Hello $final_name" . PHP_EOL;
}
// sayHello("Eko", "strtoupper");


function sampleFunction($name): string
{
    return "Sample $name" . PHP_EOL;
}

sayHello("Eko", "sampleFunction");
