<?php

namespace ToDoList\Ahmed\Core\Route;
class Request {
    
    public static function handle(){
        require_once path('routes/web.php');
        Route::Handle();
    }
}