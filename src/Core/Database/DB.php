<?php

namespace ToDoList\Ahmed\Core\Database;

use mysqli;
use ToDoList\Ahmed\Config\DbConfig;

class DB
{
    private string $sql = '';
    private function __construct(
        private string $table = '',
    ) {}

    public static function table(string $table)
    {
        return new self($table);
    }

    private function conn()
    {
        $ConfigOne = new DbConfig();
        return new mysqli(
            $ConfigOne->hostname,
            $ConfigOne->username,
            $ConfigOne->password,
            $ConfigOne->database,
        );
    }
    public function select($select = '')
    {
        $select
            ? $this->sql = "SELECT $select FROM  $this->table "
            : $this->sql = "SELECT *  FROM  $this->table ";
        return $this;
    }
    public function insert(array $data)
    {
        $columns = "";
        $values = "";
        foreach ($data as $key => $value) {
            $columns .= $key . ',';
            $values .= "'" . $value . '\',';
        }
        $columns = trim($columns, ',');
        $values = trim($values, ',');
        $this->sql = "INSERT INTO $this->table ($columns) VALUES ($values)";
        return $this;
    }
    public function update($id, array $data)
    {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= $key . ' = ' . "'".$value.'\' ';
        }
        $this->sql = "UPDATE table_name SET $set WHERE id = $id";
        return $this;
    }
    public function where($where)
    {
        $this->sql .= "WHERE $where ";
        return $this;
    }
    public function andWhere($where)
    {
        $this->sql .= "AND WHERE $where ";
        return $this;
    }
    public function delete($id)
    {
        $this->sql .= "DELETE FROM $this->table WHERE id = $id ";
        return $this;
    }
    public function deleteWhere($where)
    {
        $this->sql .= "DELETE FROM $this->table WHERE $where ";
        return $this;
    }
    public function exec()
    {
        $this->conn()->query($this->sql);
    }
    public function execAndFetch()
    {
        return $this->conn()->query($this->sql)->fetch_all();
    }
    public function getSql()
    {
        return $this->sql;
    }
}
