<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../Helper/Input.php";

function viewAddTodoList()
{
    echo "Menambah To Do" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if (trim($todo) === "x") {
        echo "Berhasil batal" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
