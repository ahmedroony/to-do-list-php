<?php
namespace ToDoList\Ahmed\Controller; 
class ToDoList{
    public function index(){
        include(path('/views/todolist/index.php'));
    }
}
