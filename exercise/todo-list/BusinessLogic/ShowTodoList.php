<?php

function showTodoList()
{
    global $todoList;

    echo "Todo List" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
