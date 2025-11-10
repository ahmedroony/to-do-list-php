<?php
namespace ToDoList\Ahmed\Controller;

use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Model\Task;
class HomeController
{
    public function index()
    {
        $tasks = DB::table('tasks')->select()->exec()->fetchdata();
        include path('/views/home/index.php');
    }
    public function create()
    {
        $action = url('store');
        include path('/views/home/create.php');
    }
    public function show()
    {
        include path('/views/home/show.php');
    }
    public function edit()
    {
        $action = url('update');
        include path('/views/home/edit.php');
    }

    public function store()
    {
        if (isset($_POST['title']) && $_POST['title'] !== '') {
            DB::table('tasks')
                ->insert([
                    'title' => $_POST['title'],
                    'isdone' => 0,
                ])
                ->exec();
        }
        redirect('/');
    }

    public function update()
    {
        redirect('/');
    }
    public function destroy()
    {
        redirect('/');
    }
}
