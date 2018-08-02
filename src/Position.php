<?php

namespace TICTACTOE;

/**
 * Position Class represents tic tac toe cell that will hold player value
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class Position
{
    /**
     * @var int position row
     */
    private $row;

    /**
     * @var int position column
     */
    private $col;

    /**
     * Position constructor.
     * @param int $row row position
     * @param int $col col position
     */
    function __construct(int $row, int $col)
    {
        $this->validatePosition($row, $col);
        $this->row = $row;
        $this->col = $col;
    }

    /**
     * get row value
     * @return int
     */
    public function getRowValue() : int
    {
        return $this->row;
    }

    /**
     * get column value
     * @return int
     */
    public function getColValue() : int
    {
        return $this->col;
    }

    /**
     * validate position dimensions
     * @param int $row row position
     * @param int $col col position
     * @throws \Exception if sent row & col are not valid
     */
    private function validatePosition(int $row, int $col)
    {
        if ($row < 0 || $row >= 3 || $col < 0 || $col >= 3 ) {
            throw new \Exception("Invalid cell positions.");
        }
    }
}