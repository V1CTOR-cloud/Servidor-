<?php

namespace app\Controller;

use Doctrine\ORM\EntityManager;
use app\Core\AbstractController;
use app\Core\GameCore;
use app\Entity\Player;

class GameController extends AbstractController 
{
  private $repository;
  private GameCore $core;
  public function __construct(EntityManager $em)
  {
    
    $this->repository = $em->getRepository(Player::class);
    parent::__construct();
  }
  public function main()
  {
    if ($_SESSION['PLAYER'] !== "") {
        
        $this->render("game.html.twig", [
          
        ]); 
    }else{
        header("location: /playerselect");
    }
  }
}