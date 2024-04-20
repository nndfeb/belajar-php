<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\one\Confilect as Confilect1;
use data\two\Confilect as Confilect2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;


$conflict1 = new Confilect1();
$conflict2 = new Confilect2();

help();
echo APP . PHP_EOL;
