<?php
namespace app\Controller;

use app\Model\EmployeeModel;
use app\Core\DataBase;
use app\View\EmployeeView;

class ControllerEmployees{
    public function main()
    {
        $clientModel = new EmployeeModel(DataBase::getInstance());
        $data = $clientModel->getList();
        $view = new EmployeeView();
        $view->drawList($data);
    }

    public function detail(int $id)
    {
        $detailModel = new EmployeeModel(DataBase::getInstance());
        $data = $detailModel->getDetail($id);
        $view = new EmployeeView();
        $view->drawDetail($data);
    }

}
