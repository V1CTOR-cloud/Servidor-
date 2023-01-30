<?php

namespace app\Controller;

use app\Entity\Tareas;
use app\Core\EntityManager;
use app\Core\AbstractController;

class ListController extends AbstractController
{
  private $em;
  public function __construct(EntityManager $em)
  {
    $this->em = $em->getEm();
    parent::__construct();
  }
  public function main()  
  {
    $tarea = new Tareas();
    $tareasRepository = $this->em->getRepository(Tareas::class);
    $data = $tareasRepository->findAll();
    $this->render("list.html.twig", [
      "data" => $data
    ]);
  }
}
