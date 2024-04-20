<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "String";
$example->data = 500;
$example->data = true;
$example->data = ["eko"];

/**
 * 
 */
function sampleFunction(string|array $data): string|array
{
    if (is_array(($data))) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction("Eko"));
var_dump(sampleFunction(["Test"]));
 