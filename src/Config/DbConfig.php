<?php
namespace ToDoList\Ahmed\Config;
class DbConfig
{
    public $hostname;
    public $username;
    public $password;
    public $servername;
    function __construct()
    {
        $config = $this->readConfigFile();
        $this->hostname = $config->database->hostname;
        $this->username = $config->database->username;
        $this->password = $config->database->password;
        $this->servername = $config->database->servername;
    }
    private function readConfigFile()
    {
        //read the file as string
        $readConfigFile = file_get_contents(path('Config/config.json'));
        //return the file as associative arrays
        if ($readConfigFile) {
            $arrayConfig = json_decode($readConfigFile);
        } else {
            return 'no config';
        }
        return $arrayConfig;
    }
    public function showConfig(){
        return[
            "hostname" =>$this->hostname,
            "username" =>$this->username,
            "password" =>$this->password,
            "servername"=>$this->servername
        ];

        
    }
}
?>
