<?php

require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Faizal");
addTodoList("Rahmat");
addTodoList("Nursaori");
showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(3);

var_dump($success);
showTodoList();
