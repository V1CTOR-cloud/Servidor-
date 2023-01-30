<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once "vendor/autoload.php";

$loader = new FilesystemLoader("templates");
$twig = new Environment($loader);

class clase1
{
    public $attr1 = 100;

    public function getAttr1()
    {
        return $this->attr1;
    }
}

// CARGAMOS 1º
echo $twig->render('layout.html.twig', [
    "nombre" => "Víctor",
    "modulo" => ["DWES", "PROG"],
    "direccion" => [
        'calle' => 'Mayor',
        'numero' => 8,
    ],
    "clase1" => new clase1(),
]);


//CARGAMOS 2º
/*  echo $twig->render('template2.html.twig', [

]); */