<?php

require_once "data/Manager.php";

$mgr = new Manager();
$mgr->name = "Budi";
$mgr->sayHello("Eko");


$president = new VicePresident();
$mgr->name = "Joko";
$mgr->sayHello("Erik");
