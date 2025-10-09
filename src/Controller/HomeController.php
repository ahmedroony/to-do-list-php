<?php
namespace ToDoList\Ahmed\Controller;

use ToDoList\Ahmed\Model\TaskModel;

class HomeController {
    public function index(){
       //logic
        $tasks = $this->createFakeTask(5);
       //view
       $createTaskUrl= url('create-task');
       $showTaskUrl= url('show-task');
       $editTaskUrl= url('edit-task');
       $destroyTaskUrl= url('destroy-task');
       include path('View/home/index.php');
    }

    public function show(){
       //logic
       //
       //view
       include path('View/home/show.php');
    }
    public function create (){
       //logic
       //
       $action = url('store-task');
       //view
       include path('View/home/create.php');
    }
    public function store(){
       //logic
       //
       //view
       redirect('/');
    }
    public function edit(){
       //logic
       //
       $action = url('update-task');
       //view
       include path('View/home/edit.php');
    }
    public function update(){

       //logic
       //
       //view
       redirect('/');
    }
    public function destroy(){
       //logic
       //
       //view
       redirect('/');
    }
    //-------------
    private function createFakeTask($count){
        $fakeTasks = [ ];
        for ($i=0; $i <$count ; $i++) { 
            $fakeTasks[] = new TaskModel($i , "title $i" , false);
        }
        return $fakeTasks;
    }

}


