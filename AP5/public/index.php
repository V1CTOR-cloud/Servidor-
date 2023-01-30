<?php
require_once "../vendor/autoload.php";

use DI\ContainerBuilder;
use Dotenv\Dotenv;
use app\Core\Request;
use app\Core\Dispatcher;
use app\Core\RouteCollection;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$builder = new ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/../config/' . $_ENV["DBCONFIGFILE"]);
$container = $builder->build();

$routes = new RouteCollection();
$request = new Request();

$container->get(Dispatcher::class);
