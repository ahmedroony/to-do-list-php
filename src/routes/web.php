<?php
use ToDoList\Ahmed\route\Route;
use ToDoList\Ahmed\Controller\HomeController;
use ToDoList\Ahmed\Controller\ToDoList;
Route::register('/', HomeController::class, 'index');
Route::register('/create', HomeController::class, 'create');
