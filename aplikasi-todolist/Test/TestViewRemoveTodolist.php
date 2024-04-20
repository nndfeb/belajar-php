<?php

require_once 'Model/TodoList.php';
require_once 'View/ViewRemoveTodoList.php';
require_once 'Services/AddTodoList.php';
require_once 'Services/ShowTodoList.php';

addTodoList('JS');
addTodoList('PHP');
addTodoList('JAVA');
addTodoList('PYTHON');

showTodoList();
viewRemoveTodoList();
showTodoList();
