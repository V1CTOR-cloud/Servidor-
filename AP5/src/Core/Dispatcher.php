<?php

namespace app\Core;

use app\Core\Interfaces\IRequest;
use app\Core\Interfaces\IRoutes;
use DI\Container;

class Dispatcher
{
    private $container;
    private $routeList;
    private IRequest $currentRequest;
    public function __construct(IRoutes $routeCollection, IRequest $request, Container $container)
    {
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->container = $container;
        $this->dispatch();
    }
    private function dispatch()
    {
        $route = $this->currentRequest->getRoute();
        if (isset($this->routeList[$route])) {
            $controllerClass = "app\\Controller\\" . $this->routeList[$route]["controller"]; 
            $controller =  $this->container->get($controllerClass); 
            $method = $this->routeList[$route]["method"];
            $controller->$method(...$this->currentRequest->getParams());
        } else {
            echo "ruta no existe";
        }
    }
}
