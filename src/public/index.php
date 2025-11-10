<?php
use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Config\DbConfig;
use ToDoList\Ahmed\Model\Task;
use ToDoList\Ahmed\route\request;
require __DIR__ . '/../../vendor/autoload.php';
request::handle();
$tasks = DB::table('tasks')->insert([
    'id' => '1',
    'title' => 'task1',
    'isdone'=> true    
])->exec();
?>
