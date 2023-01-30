<?php
namespace app\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use app\Repository\PlayerRepository;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
#[ORM\Table(name: 'Players')]

class Player {

    #[ORM\Id]
    #[ORM\Column(name: 'ID_PLAYER', type: Types::SMALLINT)]
    private $ID_PLAYER;

    #[ORM\Column(name: 'NAME_PLAYER', type: Types::STRING, length: 25)]
    private $NAME_PLAYER;

    #[ORM\Column(name: 'SCORE', type: Types::SMALLINT)]
    private $SCORE;

    /**
     * Get the value of SCORE
     */ 
    public function getSCORE() : int
    {
        return $this->SCORE;
    }

    /**
     * Set the value of SCORE
     */ 
    public function setSCORE(int $SCORE)
    {
        $this->SCORE = $SCORE;

        return $this;
    }

    /**
     * Get the value of NAME_PLAYER
     */ 
    public function getNAME_PLAYER() : string
    {
        return $this->NAME_PLAYER;
    }

    /**
     * Set the value of NAME_PLAYER
     */ 
    public function setNAME_PLAYER( string $NAME_PLAYER)
    {
        $this->NAME_PLAYER = $NAME_PLAYER;

        return $this;
    }

    /**
     * Get the value of ID_PLAYER
     */ 
    public function getID_PLAYER() : int
    {
        return $this->ID_PLAYER;
    }

    /**
     * Set the value of ID_PLAYER
     */ 
    public function setID_PLAYER(int $ID_PLAYER)
    {
        $this->ID_PLAYER = $ID_PLAYER;

        return $this;
    }
}