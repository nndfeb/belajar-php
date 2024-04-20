<?php

namespace Data;

interface HasBrand
{
    function hasBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, isMaintenance
{
    function drive(): void
    {
        echo "Drive Avnaza " . PHP_EOL;
    }
    function getTire(): int
    {
        return 4;
    }
    function hasBrand(): string
    {
        return "Toyota";
    }

    function isMaintenance(): bool
    {
        return false;
    }
}
