<?php

namespace app\Controller;

use app\Core\DataBase;
use app\Model\ClientModel;
use app\View\ClientView;

class ClientController
{
    public function main()
    {
        $clientModel = new ClientModel(DataBase::getInstance());
        $data = $clientModel->getList();
        $view = new ClientView();
        $view->drawList($data);
    }

    public function detail(int $id)
    {
        $detailModel = new ClientModel(DataBase::getInstance());
        $data = $detailModel->getDetail($id);
        $view = new ClientView();
        $view->drawDetail($data);
    }
}
