<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Faizal");
addTodoList("Rahmat");

var_dump($todoList);
