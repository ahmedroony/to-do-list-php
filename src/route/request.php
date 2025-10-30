<?php
namespace ToDoList\Ahmed\route; 
class request{
    public static function handle(){
        require_once path('routes/web.php'); 
        Route::handleroute();
        return;
    }
}