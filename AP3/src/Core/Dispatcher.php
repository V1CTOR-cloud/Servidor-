<?php

namespace app\Core;

class Dispatcher
{
    private $routeList;
    private $route;
    private $params;
    public function __construct()
    {
        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/", $rawRoute);
        $this->route = "/" . $rawRouteElements[1];
        $this->params = array_slice($rawRouteElements, 2);

        $this->routeList = json_decode(file_get_contents(__DIR__ . "/../../Config/" . $_ENV['ROUTESFILE']), true);
        $this->dispatch();
    }
    private function dispatch()
    {
        if (isset($this->routeList[$this->route])) {
            $controllerClass = "app\\Controller\\" . $this->routeList[$this->route]["controller"];
            $controller =  new $controllerClass;
            $action = $this->routeList[$this->route]["method"];
            $controller->$action(...$this->params);
        } else {
            echo "ruta no existe";
        }
    }
}
