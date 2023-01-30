<?php

namespace app\Core\Interfaces;
use app\Core\GameResult;
interface GameCoreInterface
{
    public function getWinner(?int $bet): GameResult;
}
