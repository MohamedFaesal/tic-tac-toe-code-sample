<?php

namespace TICTACTOETest;

use TICTACTOE\Cell;
use TICTACTOE\OCell;
use TICTACTOE\XCell;

/**
 * CellTest Class is represent unit test for @see Cell, XCell, OCell
 * @package TICTACTOETest
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class CellTest extends TicTacToeTestCase
{
    public function testSetValueWithInvalidInputWillThrowException()
    {
        $value = 'Z';
        $cell = new Cell();
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Invalid cell value.");
        $cell->setValue($value);
    }

    public function testSetValueAndGetValueWithValidInputWillReturnTheSameValueSet()
    {
        $value = 'X';
        $cell = new Cell();
        $cell->setValue($value);
        $retrievedValue = $cell->getValue();
        $this->assertInternalType('string', $retrievedValue);
        $this->assertEquals(Cell::X_MARK, $retrievedValue);
    }

    public function testXCellObjectWillReturnTheXValue()
    {
        $xCell = new XCell();
        $retrievedValue = $xCell->getValue();
        $this->assertInternalType('string', $retrievedValue);
        $this->assertEquals(Cell::X_MARK, $retrievedValue);
    }


    public function testOCellObjectWillReturnTheOValue()
    {
        $oCell = new OCell();
        $retrievedValue = $oCell->getValue();
        $this->assertInternalType('string', $retrievedValue);
        $this->assertEquals(Cell::O_MARK, $retrievedValue);
    }
}