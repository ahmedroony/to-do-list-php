<?php
namespace ToDoList\Ahmed\Controller;
class HomeController {
    public function index(){
        include(path('/views/home/index.php'));
    }
}