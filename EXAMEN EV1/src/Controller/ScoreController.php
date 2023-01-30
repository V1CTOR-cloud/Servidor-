<?php

namespace app\Controller;

use Doctrine\ORM\EntityManager;
use app\Core\AbstractController;
use app\Entity\Player;

class ScoreController extends AbstractController
{
  private $repository;
  public function __construct(EntityManager $em)
  {
    $this->repository = $em->getRepository(Player::class);
    parent::__construct();
  }
  public function list()
  {
    $data = $this->repository->findAll();
    $this->render("Score.html.twig", [
      "data" => $data
    ]);
  }
}