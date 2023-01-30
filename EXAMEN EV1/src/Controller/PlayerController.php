<?php

namespace app\Controller;

use Doctrine\ORM\EntityManager;
use app\Core\AbstractController;
use app\Entity\Player;

class PlayerController extends AbstractController
{
  private $repository;
  public function __construct(EntityManager $em)
  {
    $this->repository = $em->getRepository(Player::class);
    parent::__construct();
  }
  public function main()
  {
    
    if (count($_POST)) {
      header("location: /game");
      $_SESSION['PLAYER'] = intval($_POST['PLAYER']);
    }else{
      $data = $this->repository->findAll();
      $this->render("playerSelect.html.twig", [
        "data" => $data
      ]);
    }
  }
}