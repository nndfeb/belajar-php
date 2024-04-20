<?php

namespace Data;

// Class Parent
class Shape
{
    function getCorner()
    {
        return 10;
    }
}


// Class Child
class Rectangle extends Shape
{
    function getCorner()
    {
        return 0;
    }

    // ambil getConer dari parent
    function getParentCorner()
    {
        return parent::getCorner();
    }
}
