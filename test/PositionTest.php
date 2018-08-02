<?php

namespace TICTACTOETest;

use TICTACTOE\Position;

/**
 * PositionTest Class is represent unit test for @see Position
 * @package TICTACTOETest
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class PositionTest extends TicTacToeTestCase
{
    public function testValidatePositionWInvalidDimensionsWillThrowException()
    {
        $row = 12;
        $col = 5;
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Invalid cell positions.");
        $position = new Position($row, $col);
    }
}