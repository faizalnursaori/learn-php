<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah To Do" . PHP_EOL;
        echo "2. Hapus To Do" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = trim(input("Pilih")); // Menghapus spasi dan newline

        if ($pilihan === "1") {
            viewAddTodoList();
        } else if ($pilihan === "2") {
            viewRemoveTodoList();
        } else if ($pilihan === "x") {
            break;
        } else {
            echo "Pilih angka yang sesuai dengan Menu" . PHP_EOL;
        }
    }

    echo "See you" . PHP_EOL;
}
