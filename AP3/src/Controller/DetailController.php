<?php

namespace app\Controller;

use app\View\DetailView;
use app\Model\DetailModel;

class DetailController
{
  public function main($id)
  {
    $detailModel = new DetailModel();
    $data = $detailModel->getDetail($id);
    $view = new DetailView();
    $view->drawDetail($data);
  }
}
