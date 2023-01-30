<?php

use Dotenv\Dotenv;
use app\Core\Dispatcher;

require_once "../vendor/autoload.php";

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

new Dispatcher();
