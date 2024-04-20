<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\one\Confilect;
use function Helper\helpMe;
use const Helper\APPLICATION;


$conflict1 = new Confilect();
$conflict2 = new \data\two\Confilect();

helpMe();
echo APPLICATION . PHP_EOL;
