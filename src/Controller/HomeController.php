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
        $id = $_GET['id'];
        if($id){
            $task=DB::table('tasks')->select()->where("id = $id")->exec()->fetchdata();
            $task = $task[0];
        }
        $action = url('update?id=' . $id);
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
        $id = $_GET['id'];

        if($id && isset($_POST['title'])){
            $isdone = isset($_POST['isdone']) ? 1 : 0;
            
            DB::table('tasks')->updata($id,[
                'title'=>$_POST['title'],
                'isdone'=>$isdone
            ])->exec();
        }
        redirect('/');
    }
    public function destroy()
    {
        $id = $_GET['id'];
        if($id){
            DB::table('tasks')->delete($id)->exec();
        }
        redirect('/');
    }
}
