<?php
use ToDoList\Ahmed\route\Route;
use ToDoList\Ahmed\Controller\HomeController;
use ToDoList\Ahmed\Controller\ToDoList;
Route::register('/', HomeController::class, 'index');
Route::register('/create', HomeController::class, 'create');
Route::register('/store', HomeController::class, 'store');
Route::register('/edit', HomeController::class, 'edit');
Route::Register('/update' , HomeController::class , 'update');
Route::Register('/destroy' , HomeController::class , 'destroy');
Route::register('/show', HomeController::class, 'show');
