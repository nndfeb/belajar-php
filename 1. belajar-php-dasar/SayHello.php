<?php

function sayHello()
{
    echo "Hello functions" . PHP_EOL;
}

function call_name($name = "Defualt Value")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello();
call_name("Nendi");
call_name();

// Membuat Type data pada variable
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 200);


// Belajar argument list
function sum_all(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sum_all(10, 20, 30, 40);
