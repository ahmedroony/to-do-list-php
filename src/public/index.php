<?php
use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Config\DbConfig;
use ToDoList\Ahmed\Model\Task;
use ToDoList\Ahmed\route\request;
require __DIR__ . '/../../vendor/autoload.php';
request::handle();
$tasks = Task::all();
?>
