<?php

namespace TICTACTOE;

/**
 * OPlayer Class represents player will mark on board with O value
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class OPlayer extends AbstractPlayer
{
    /**
     * remark on board with O value
     * {@inheritdoc}
     */
     public function remarkOnBoard(Position $position)
     {
         $this->gameBoard->remarkOnBoard(new OCell(), $position);
     }

    /**
     * {@inheritdoc}
     */
     public function isWinner() : bool
     {
         return $this->gameBoard->isPlayerWithCellWinner(new OCell());
     }
}