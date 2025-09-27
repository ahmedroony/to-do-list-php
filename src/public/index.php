<?php
require __DIR__ . "/../../vendor/autoload.php";

use ToDoList\Ahmed\config\Conn;
use ToDoList\Ahmed\config\Create;

$userOne = new Conn();
$userOne->Conn();

$userOn = new Create();
$userOn->Create();

require_once("src/UI/main.php");