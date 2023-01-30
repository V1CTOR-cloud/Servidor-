<?php

namespace app\Controller;

use app\View\ListView;
use app\Model\ListModel;

class ListController
{
  public function main()
  {
    $listModel = new ListModel();
    $data = $listModel->getList();
    $view = new ListView();
    $view->drawList($data);
  }
}
