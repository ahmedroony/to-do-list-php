<?php

//stage 2 -> route

use ToDoList\Ahmed\Controller\HomeController;
use ToDoList\Ahmed\Core\Route\Route;

Route::Register('/' , HomeController::class , 'index');
Route::Register('/show-task' , HomeController::class , 'show');
Route::Register('/create-task' , HomeController::class , 'create');
Route::Register('/store-task' , HomeController::class , 'store');
Route::Register('/edit-task' , HomeController::class , 'edit');
Route::Register('/update-task' , HomeController::class , 'update');
Route::Register('/destroy-task' , HomeController::class , 'destroy');
