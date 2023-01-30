<?php
require_once "../vendor/autoload.php";

use Dotenv\Dotenv;
use app\Core\Request;
use app\Core\Dispatcher;
use app\Core\RouteCollection;


$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

new Dispatcher( RouteCollection::getInstance(),Request::getInstance());
