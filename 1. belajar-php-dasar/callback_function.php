<?php

function sayHello(string $name, callable $filter)
{
    $final_name = call_user_func($filter, $name);
    echo "Hello $final_name " . PHP_EOL;
}

sayHello("eko", 'strtoupper');

// Anonymus function
sayHello("eko", function (string $name) {
    return strtoupper($name);
});


// Arrow function
sayHello("eko", fn ($name) => strtoupper($name));
