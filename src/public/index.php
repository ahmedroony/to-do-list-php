<?php
use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Config\DbConfig;
require __DIR__  . '/../../vendor/autoload.php';
$One = new DbConfig;
print_r($One->readConfigFile())
?>
