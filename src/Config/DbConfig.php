<?php
namespace ToDoList\Ahmed\Config;
use ToDoList\Ahmed\GeneralConstants\Constant;
class DbConfig
{
    public $hostname;
    public $username;
    public $password;
    public $dbname;
    function __construct()
    {
        $config = $this->readConfigFile();
        $this->hostname = $config->database->hostname;
        $this->username = $config->database->username;
        $this->password = $config->database->password;
        $this->dbname = $config->database->dbname;
    }
    public function readConfigFile()
    {
        //read the file as string
        $readConfigFile = file_get_contents(Constant::CONFIG_File_Path());// if the path change what should we do 
        //return the file as associative arrays
        return $arrayConfig = json_decode($readConfigFile); 
    }
    public function showConfig(){
        return[
            "hostname" =>$this->hostname,
            "username" =>$this->username,
            "password" =>$this->password,
            "servername"=>$this->dbname
        ];
    }
}
?>
