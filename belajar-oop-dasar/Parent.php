<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; //10

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL; //0
echo $rectangle->getParentCorner() . PHP_EOL; //10
