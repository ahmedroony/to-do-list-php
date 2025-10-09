<?php

namespace ToDoList\Ahmed\Model;

use ToDoList\Ahmed\Core\Database\DB;

class TaskModel
{
    public function __construct(
        public ?int $id = null,
        public ?string $title = null,
        public ?bool $completed= null,
    ) {}


    public static function all (){
        $records = DB::table('tasks')->select()->execAndFetch();
        $tasks = [];
        foreach($records as $record ){
            $tasks[] = new self(
                $record['id'],
                $record['title'],
                $record['completed'],
            );
        }
        return $tasks;
    }

    public static function create(array $data){
        DB::table('tasks')->insert($data)->exec();
    }
}

