<?php
require_once 'Model/TodoList.php';
require_once 'Services/ShowTodoList.php';
require_once 'View/ViewAddTodoList.php';
require_once 'View/ViewRemoveTodoList.php';
require_once 'Helper/Input.php';

function viewShowTodoList()
{
    while (true) {
        showTodoList();
        echo "Menu :" . PHP_EOL;
        echo "1. Tambah" . PHP_EOL;
        echo "2. Hapus" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih ");
        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            // keluar
            break;
        } else {
            echo "Pilihan tidak ada!" . PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi !" . PHP_EOL;
}
