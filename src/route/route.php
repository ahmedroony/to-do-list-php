<?php
namespace ToDoList\Ahmed\route;
use ToDoList\Ahmed\Controller\Error;
class Route
{
    public static $routes = [];
    public static function register($uri,$Controller,$method){
        self::$routes[$uri] = [$Controller,$method];
    }
    public static function handleroute()
    {
        $uri = $_SERVER['SCRIPT_NAME'];
        foreach (self::$routes as $route => $Controller) {
            if ($route == $uri) {
                $classname = $Controller[0];
                $methodname = $Controller[1];
                (new $classname())->$methodname(); // self invoke
                return;
            }
        }
            (new Error())->error();
    }
}
