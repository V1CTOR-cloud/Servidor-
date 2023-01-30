<?php
 require_once '../vendor/autoload.php'; 
 use app\controller\{ControllerLista};
 $valor = $_GET['action'];

 switch ($valor) {
    case 'list':
        $lista = new ControllerLista();
        $lista->Lista();
        break;

    case 'detail':
        $number = $_GET['number'];
        $lista = new ControllerLista();
        $lista->ListaDetail($number);
        break;
    
    default:
        echo 'ERROR: Unknow action' . $valor;
        break;
 }

?>