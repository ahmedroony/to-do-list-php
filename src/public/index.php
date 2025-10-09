<?php

use ToDoList\Ahmed\Core\Route\Request;
use ToDoList\Ahmed\Model\TaskModel;

require __DIR__ . '/../../vendor/autoload.php';

Request::handle();


TaskModel::create([
    'title'=> 'kkfdjs',
    'completed'=> true,
]);

