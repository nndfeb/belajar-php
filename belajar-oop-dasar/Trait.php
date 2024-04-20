<?php

require_once "data/TraitSayGoodbye.php";

use Data\Trait\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Nedi");
$person->hello("Nedi");

$person->name = "Kuyha";
$person->run();

var_dump($person);
