<?php
require_once 'Model/TodoList.php';
require_once 'Services/AddTodoList.php';
require_once 'Helper/Input.php';

function viewAddTodoList()
{
    echo "MENAMBAH TODO :" . PHP_EOL;
    $todo = input('Todo (x unutk batal)');
    if ($todo == "x") {
        // Batal
        echo "Batal menambah todo!" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
