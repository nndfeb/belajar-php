<?php

require_once 'Model/TodoList.php';
require_once 'Services/RemoveTodoList.php';
require_once 'Services/AddTodoList.php';
require_once 'Services/ShowTodoList.php';

addTodoList("JS");
addTodoList("PHP");
addTodoList("JAVA");
addTodoList("Python");
addTodoList("C++");


showTodoList();
removeTodoList(2);
showTodoList();
removeTodoList(1);
showTodoList();

$deleted = removeTodoList(5);
var_dump($deleted);
showTodoList();
