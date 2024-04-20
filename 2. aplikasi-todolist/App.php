<?php

// Model
require_once __DIR__ . "/Model/TodoList.php";

// Service
require_once __DIR__ . "/Services/ShowTodoList.php";
require_once __DIR__ . "/Services/AddTodoList.php";
require_once __DIR__ . "/Services/RemoveTodoList.php";

// view
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";

// Input
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;
viewShowTodoList();
