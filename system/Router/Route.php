<?php

namespace Lynx\System\Router;

use App\Controllers\HomeController;
use Lynx\System\Exception\ApplicationException;

class Route{

    public static function get($route, $array) {

        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            return new ApplicationException("Method not allowed.", "lynx/routes/mapper.php");
        }

        if ($route == "" || $route == null) {
            return new ApplicationException("Route can not be empty.", "lynx/routes/mapper.php");            
        }

        if (!is_array($array)) {
            return new ApplicationException("Second parameter must be an array.", "lynx/routes/mapper.php");            
        }

        if (count($array) !== 2) {
            return new ApplicationException("Second Parameter must has 2 value in an array.", "lynx/routes/mapper.php");            
        }

        $requestURI = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($requestURI);
        array_shift($requestURI);
        $requestURI = implode('/', $requestURI);

        if ($requestURI !== $route) {
            return new ApplicationException("Route not found.", "lynx/routes/mapper.php", 404);            
        }

        if (!file_exists($array[0] . ".php")) {
            return new ApplicationException("Controller not found.", "lynx/routes/mapper.php");
        }

        if (!method_exists($array[0], $array[1])) {
            return new ApplicationException("$array[0]::$array[1] not found.", "lynx/routes/mapper.php");
        }


        $app = new $array[0];
        $app->{$array[1]}();

    }

    public static function post($route, $array) {

        if($_SERVER['REQUEST_METHOD'] !== "POST"){
            return new ApplicationException("Method not allowed.", "lynx/routes/mapper.php");
        }

        if ($route == "" || $route == null) {
            return new ApplicationException("Route can not be empty.", "lynx/routes/mapper.php");            
        }

        if (!is_array($array)) {
            return new ApplicationException("Second parameter must be an array.", "lynx/routes/mapper.php");            
        }

        if (count($array) !== 2) {
            return new ApplicationException("Second Parameter must has 2 value in an array.", "lynx/routes/mapper.php");            
        }

        $requestURI = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($requestURI);
        array_shift($requestURI);
        $requestURI = implode('/', $requestURI);

        if ($requestURI !== $route) {
            return new ApplicationException("Route not found.", "lynx/routes/mapper.php", 404);            
        }

        if (!file_exists($array[0] . ".php")) {
            return new ApplicationException("Controller not found.", "lynx/routes/mapper.php");
        }

        if (!method_exists($array[0], $array[1])) {
            return new ApplicationException("$array[0]::$array[1] not found.", "lynx/routes/mapper.php");
        }


        $app = new $array[0];
        $app->{$array[1]}();

    }

  
    public function group($prefix, $callback){
        $callback();
    }

    public function middleware($middleware){
        $middleware = new $middleware;
    }

}