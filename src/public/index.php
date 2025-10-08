<?php
use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Config\DbConfig;
include "src/Core/Helper/basic.php";
require __DIR__ . "/../../vendor/autoload.php";
$DbOne = new DB;
$DbOne->query('SELECT * FROM todolist');
?>
