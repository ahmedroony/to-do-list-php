<?php
namespace ToDoList\Ahmed\Config;

use Exception;
class DbConfig
{
    public $hostname;
    public $username;
    public $password;
    public $database;
    function __construct()
    {
        $config = $this->readConfigFile();
        $this->hostname = $config->database->hostname;
        $this->username = $config->database->username;
        $this->password = $config->database->password;
        $this->database= $config->database->database;
    }
    private function readConfigFile()
    {
        $fileContent = file_get_contents(path('Config/config.json'));
        return json_decode($fileContent);
    }
    public function showConfig(){
        return[
            "hostname" =>$this->hostname,
            "username" =>$this->username,
            "password" =>$this->password,
            "servername"=>$this->database
        ];
    }
}
?>
