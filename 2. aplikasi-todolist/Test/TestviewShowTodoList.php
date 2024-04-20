<?php

require_once 'View/viewShowTodoList.php';
require_once 'Services/AddTodoList.php';
addTodoList("JS");
addTodoList("PHP");
viewShowTodoList();
