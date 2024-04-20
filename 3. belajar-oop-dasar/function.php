<?php
require_once "data/Person.php";
$joko = new Person("Joko", "Subang");
$joko->name = "Joko";
$joko->sayHello(null);
$joko->info();

$budi = new Person("Budi", "Karwang");
$budi->name = "budi";
$budi->sayHello("Eko");
$budi->info();
