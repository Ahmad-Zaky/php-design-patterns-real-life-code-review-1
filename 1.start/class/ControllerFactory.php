<?php

require_once "Controllers/HomeController.php";
require_once "Controllers/UserController.php";

class ControllerFactory
{
    public function make($route, $dbHandler)
    {   
        switch ($route[1] ?? '') {
            case '':
            case 'home':
            case 'index.php':
            case 'login':
            case 'logout':
            case 'results':
            case 'register':
                return new HomeController;

            case 'registerUser':
            case 'loginUser':
            case 'search':
                return new UserController($dbHandler);
        }
    }

    public function makeFromRouter(Router $router, $dbHandler) 
    {
        return $this->make($router->parseRoute(), $dbHandler);
    }
}