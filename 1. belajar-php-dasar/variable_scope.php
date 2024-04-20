<?php

// viable soce ada 3
/**
 * Global scope
 * Local scope
 * Static scope
 */

$name = "Nendi"; //Global scope
function sayName()
{
    global $name;
    echo $name . PHP_EOL;

    // atau bisa seperi ini
    echo $GLOBALS['name'];
}
sayName();
