<?php

class Router{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];


    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }


    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }


    public function direct($uri, $requestType){
        if(array_key_exists($uri, $this->routes[$requestType])){
            // return $this->routes[$requestType][$uri];
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );

        }
    }

    protected function callAction($controller, $action){
        if(!method_exists($controller, $action)){
            throw new Exception("Method not found");
        }

        return (new $controller)->$action();
    }
}