<?php

namespace TICTACTOE;

/**
 * GameBoard Class represents a tic tac toe game board
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class GameBoard
{
    /**
     * @const GameBoard::ROWS represent game board rows
     */
    const ROWS = 3;

    /**
     * @const GameBoard::COLS represent game board cols
     */
    const COLS = 3;

    /**
     * @var array 3 X 3 dimension array that hold players value
     */
    private $board;

    /**
     * GameBoard constructor.
     */
    function __construct()
    {
        $this->clearGameBoard();
    }

    /**
     * remark on board
     * @param Cell $cell cell will be added with X or O
     * @param Position $position position of the game board
     * @throws \Exception if this position is not empty on board
     */
    public function remarkOnBoard (Cell $cell, Position $position)
    {
        if(!$this->isCellPositionEmpty($position)) {
            throw new \Exception("Must send position empty in game board.");
        }
        $this->board[$position->getRowValue()][$position->getColValue()] = $cell;
    }

    /**
     * check if this cell position is empty on board
     * @param Position $position cell position
     * @return bool
     */
    private function isCellPositionEmpty(Position $position) : bool
    {
        $cell      = $this->board[$position->getRowValue()][$position->getColValue()];
        $cellValue = $cell->getValue();
        if (empty($cellValue) || is_null($cellValue)) {
            return true;
        }
        return false;
    }

    /**
     * check if this cell is the winner or not
     * @param Cell $cell cell
     * @return bool
     */
    public function isPlayerWithCellWinner(Cell $cell) : bool
    {
        $cellValue = $cell->getValue();
        // check if any row is filled with this cell value
        for ($rowIndex = 0; $rowIndex < self::ROWS; $rowIndex++) {
            if (
                $this->board[$rowIndex][0]->getValue() == $cellValue &&
                $this->board[$rowIndex][1]->getValue() == $cellValue  &&
                $this->board[$rowIndex][2]->getValue() == $cellValue
            ) {
                return true;
            }
        }
        // check if any col is filled with this cell value
        for ($colIndex = 0; $colIndex < self::COLS; $colIndex++) {
            if (
                $this->board[0][$colIndex]->getValue() == $cellValue &&
                $this->board[1][$colIndex]->getValue() == $cellValue  &&
                $this->board[2][$colIndex]->getValue() == $cellValue
            ) {
                return true;
            }
        }
        // check if the two crosses way is filled with this value
        if (
            $this->board[0][0]->getValue() == $cellValue &&
            $this->board[1][1]->getValue() == $cellValue  &&
            $this->board[2][2]->getValue() == $cellValue
        ) {
            return true;
        }
        if (
            $this->board[0][2]->getValue() == $cellValue &&
            $this->board[1][1]->getValue() == $cellValue  &&
            $this->board[2][0]->getValue() == $cellValue
        ) {
            return true;
        }
        return false;
    }

    /**
     * clear game board
     */
    private function clearGameBoard()
    {
        $this->board = [];
        for ($rowIndex = 0; $rowIndex < self::ROWS; $rowIndex++) {
            $this->board[$rowIndex] = [];
            for ($colIndex = 0; $colIndex < self::COLS; $colIndex++) {
                $this->board[$rowIndex][$colIndex] = new Cell();
            }
        }
    }
}