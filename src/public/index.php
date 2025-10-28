<?php
use ToDoList\Ahmed\Core\Database\DB;
use ToDoList\Ahmed\Config\DbConfig;
require __DIR__ . '/../../vendor/autoload.php';
$uri = $_SERVER['SCRIPT_NAME'];

$route = ['/', 'create'];

function routes($route,$uri)
{
    foreach ($route as $routes) {
        if ($routes == $uri) {
            echo $uri . ':allowd';
            return true;
            die();
        }
        return false;
    }
}
echo routes($route,$uri);

?>
