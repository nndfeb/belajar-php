<?php
require_once "data/Programmer.php";
$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Obj BackendProgrammer");
var_dump($company);

$company->programmer = new FrontendProgrammer("Obj FrontendProgrammer");
var_dump($company);
