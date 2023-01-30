<?php
namespace app\controller;

use app\model\ModelLista;

class ControllerLista{
    public function Lista(){
        $lista = new ModelLista();
        $lista->getLista();
    }

    public function ListaDetail($number){
        $lista = new ModelLista();
        $lista->getListaDetail($number);
    }
}

?>