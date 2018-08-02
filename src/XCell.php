<?php

namespace TICTACTOE;

/**
 * XCell Class represents tic tac toe X cell value
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class XCell extends Cell
{
    /**
     * XCell constructor.
     */
    function __construct()
    {
        $this->setValue(Cell::X_MARK);
    }
}