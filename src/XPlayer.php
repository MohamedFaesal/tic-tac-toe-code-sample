<?php

namespace TICTACTOE;

/**
 * XPlayer Class represents player will mark on board with X value
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class XPlayer extends AbstractPlayer
{
    /**
     * remark on board with X value
     * {@inheritdoc}
     */
     public function remarkOnBoard(Position $position)
     {
         $this->gameBoard->remarkOnBoard(new XCell(), $position);
     }

    /**
     * {@inheritdoc}
     */
    public function isWinner() : bool
    {
        return $this->gameBoard->isPlayerWithCellWinner(new XCell());
    }
}