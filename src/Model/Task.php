<?php
namespace ToDoList\Ahmed\Model;
use ToDoList\Ahmed\Config\DbConfig;
use ToDoList\Ahmed\Core\Database\DB;

class Task{
   public function __construct(
        public ?int $id = null,
        public ?string $title = null,
        public ?bool $isdone = null,
   ){}
   public static function all(){
      $records = DB::table('tasks')->select()->exec();
      $tasks = [];
      foreach($records as $record ){
         $tasks[] =  new self(
         $record['id'],
         $record['title'],
         $record["isdone"],
         );
      }
      return $tasks;
   }
   public static function create(array $data){
       DB::table('tasks')->insert($data)->exec();
   }
}