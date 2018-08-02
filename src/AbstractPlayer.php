<?php

namespace TICTACTOE;

/**
 * AbstractPlayer Class represents player will mark on board
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
abstract class AbstractPlayer
{
    /**
     * @var GameBoard $gameBoard game board
     */
    protected $gameBoard;

    /**
     * AbstractPlayer constructor.
     * @param GameBoard $gameBoard game board
     */
    function __construct(GameBoard $gameBoard)
    {
        $this->gameBoard = $gameBoard;
    }

    /**
     * remark on board
     * @param Position $position
     */
    abstract public function remarkOnBoard(Position $position);

    /**
     * check if this player is the winner
     * @return bool
     */
    abstract public function isWinner() : bool;
}