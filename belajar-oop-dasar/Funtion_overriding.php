<?php
require_once "data/Manager.php";
$mgr = new Manager();
$mgr->name = "nenid";
$mgr->sayHello("Joko");


$vp = new VicePresident();
$vp->name = "Kiki";
$vp->sayHello("Rara");
