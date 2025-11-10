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
}