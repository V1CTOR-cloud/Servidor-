<?php

namespace app\Controller;

use app\Core\DataBase;
use app\View\DetailView;
use DI\ContainerBuilder;
use app\Model\DetailModel;

class DetailController
{
  private $detailModel;

  public function __construct(DetailModel $detailModel)
  {
    $this->detailModel = $detailModel;
  }


  public function main(int $id): void
  {
    $data = $this->detailModel->getDetail($id);
    $view = new DetailView();
    $view->drawDetail($data);
  }
}
