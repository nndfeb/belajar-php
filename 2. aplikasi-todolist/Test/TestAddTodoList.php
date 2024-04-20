<?php
require_once 'Model/TodoList.php';
require_once 'Services/AddTodoList.php';

addTodoList('PHP');
addTodoList('JS');
addTodoList('Python');

var_dump($todoList);
