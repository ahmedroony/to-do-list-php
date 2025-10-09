<?php
namespace ToDoList\Ahmed\Core\Route;

use ToDoList\Ahmed\Controller\ErrorController;

class Route
{
    private static $routes = [ ];
    public static function  Register($uri , $controller , $method){
        self::$routes[$uri] = [$controller, $method];
    }
    public static function Handle()
    {
        $uri= $_SERVER['SCRIPT_NAME'];
        foreach (self::$routes as $route => $controller) {
            if ($route == $uri) {
                $className = $controller[0];
                $methodName = $controller[1];
                (new $className())->$methodName();
                return;
            }
        }
        (new ErrorController())->E404();
    }
}
