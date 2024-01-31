<?php

namespace Poo\Project\Kernel;

use Poo\Project\Config\Config;

abstract class Dispatcher
{
    public static function dispatch()
    {
        if (isset($_GET['controller']) && isset($_GET['method'])) {
            if (class_exists(Config::CONTROLLER . $_GET['controller'])) {
                $c = Config::CONTROLLER . $_GET['controller'];
                $controller = new $c;
                if (method_exists($controller, $_GET['method'])) {
                    $method = $_GET['method'];
                    $controller->$method();
                    return;
                }
            }
        }
        $c = Config::CONTROLLER . Config::DEFAULT_CONTROLLER;
        $method = Config::DEFAULT_METHOD;
        $controller = new $c;
        $controller->$method();
    }
}
