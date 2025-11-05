<?php
namespace ToDoList\Ahmed\Controller;
class HomeController {
    public function index(){
        include(path('/views/home/index.php'));
    }
    public function create(){
        include(path('/views/home/create.php'));
    }
}