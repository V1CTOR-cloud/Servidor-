<?php
namespace app\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use app\Repository\RecordingRepository;

#[ORM\Entity(repositoryClass: RecordingRepository::class)]
#[ORM\Table(name: 'Recordings')]


class Recording {

    #[ORM\Id]
    #[ORM\Column(name: 'ID_RECORDINGS', type: Types::SMALLINT)]
    private $ID_RECORDINGS;

    #[ORM\Column(name: 'DATE_RECORD', type: Types::DATE)]
    private $DATE_RECORD;

    #[ORM\Column(name: 'PLAYER', type: Types::SMALLINT)]
    private $PLAYER;

    #[ORM\Column(name: 'WINNER', type: Types::SMALLINT)]
    private $WINNER;

    /**
     * Get the value of ID_RECORDINGS
     */ 
    public function getID_RECORDINGS() : int
    {
        return $this->ID_RECORDINGS;
    }

    /**
     * Set the value of ID_RECORDINGS
     */ 
    public function setID_RECORDINGS(int $ID_RECORDINGS)
    {
        $this->ID_RECORDINGS = $ID_RECORDINGS;

        return $this;
    }

    /**
     * Get the value of DATE_RECORD
     */ 
    public function getDATE_RECORD() : int
    {
        return $this->DATE_RECORD;
    }

    /**
     * Set the value of DATE_RECORD
     */ 
    public function setDATE_RECORD(date $DATE_RECORD)
    {
        $this->DATE_RECORD = $DATE_RECORD;

        return $this;
    }

    /**
     * Get the value of PLAYER
     */ 
    public function getPLAYER() : int
    {
        return $this->PLAYER;
    }

    /**
     * Set the value of PLAYER
     */ 
    public function setPLAYER(int $PLAYER)
    {
        $this->PLAYER = $PLAYER;

        return $this;
    }

    /**
     * Get the value of WINNER
     */ 
    public function getWINNER() : int
    {
        return $this->WINNER;
    }

    /**
     * Set the value of WINNER
     */ 
    public function setWINNER(int $WINNER)
    {
        $this->WINNER = $WINNER;

        return $this;
    }
}