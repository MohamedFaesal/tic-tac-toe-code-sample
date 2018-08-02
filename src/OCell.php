<?php

namespace TICTACTOE;

/**
 * OCell Class represents tic tac toe O cell value
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class OCell extends Cell
{
    /**
     * OCell constructor.
     */
    function __construct()
    {
        $this->setValue(Cell::O_MARK);
    }
}