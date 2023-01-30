<?php

use DI\get;
use app\Core\DataBase;
use app\Core\RouteCollection;
use app\Core\Interfaces\IRoutes;
use app\Core\Interfaces\IRequest;
use app\Core\Interfaces\IDataBase;
use app\Core\Request;

return [
    IDataBase::class => function(){
        return DataBase::getInstance();
    },
    IRoutes::class => function(){
        return DI\get(RouteCollection::class);
    },
    IRequest::class => function() {
        return DI\get(Request::class);
    }
];