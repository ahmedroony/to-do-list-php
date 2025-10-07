<?php
use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Config\DbConfig;
include "src/Core/Helper/basic.php";
require __DIR__ . "/../../vendor/autoload.php";
$DbConfigOne = new DbConfig();
print_r($DbConfigOne->showConfig());
?>
