<?php
namespace ToDoList\Ahmed\Model;
class Task{
   public function __construct(
        public ?int $id = null,
        public ?string $title = null,
        public ?bool $isdone = null,
   ){}
}