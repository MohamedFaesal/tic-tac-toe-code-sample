<?php

namespace TICTACTOETest;

use TICTACTOE\Cell;
use TICTACTOE\GameBoard;
use TICTACTOE\OCell;
use TICTACTOE\OPlayer;
use TICTACTOE\Position;
use TICTACTOE\XCell;
use TICTACTOE\XPlayer;

/**
 * Game Class is represent unit test for @see XPlayer, OPlayer, GameBoard
 * @package TICTACTOETest
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class GameTest extends TicTacToeTestCase
{
    /**
     *  X |   |
     *    |   |
     *    |   |
     */
    public function testRemarkOnBoardWithXPlayerOnOccupiedPositionWillThrowException()
    {
        $xPlayer = new XPlayer(new GameBoard());
        $position = new Position(0, 0);
        $xPlayer->remarkOnBoard($position);
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Must send position empty in game board.");
        // x player remark on the same position a gain
        $xPlayer->remarkOnBoard($position);
    }

    /**
     *  X | O |
     *    |   | X
     *  O |   |
     */
    public function testIsWinnerWithUnCompletedWillReturnFalseWhereNoOnWon()
    {
        $gameBoard = new GameBoard();
        $xPlayer = new XPlayer($gameBoard);
        $oPlayer = new OPlayer($gameBoard);

        $xPlayer->remarkOnBoard(new Position(0, 0));
        $oPlayer->remarkOnBoard(new Position(0, 1));
        $xPlayer->remarkOnBoard(new Position(1, 2));
        $oPlayer->remarkOnBoard(new Position(2, 0));
        $isXPlayerWon = $xPlayer->isWinner();
        $isOPlayerWon = $oPlayer->isWinner();

        $this->assertInternalType('bool', $isXPlayerWon);
        $this->assertInternalType('bool', $isOPlayerWon);
        $this->assertEquals($isXPlayerWon, false);
        $this->assertEquals($isOPlayerWon, false);
    }

    /**
     *  X | O |
     *    | X |
     *  O |   | X
     */
    public function testIsWinnerWithCompletedXValuesWillReturnTrueForXPlayerAndFalseForOPlayerWhereNoOnWon()
    {
        $gameBoard = new GameBoard();
        $xPlayer = new XPlayer($gameBoard);
        $oPlayer = new OPlayer($gameBoard);

        $xPlayer->remarkOnBoard(new Position(0, 0));
        $oPlayer->remarkOnBoard(new Position(0, 1));
        $xPlayer->remarkOnBoard(new Position(1, 1));
        $oPlayer->remarkOnBoard(new Position(2, 0));
        $xPlayer->remarkOnBoard(new Position(2, 2));
        $isXPlayerWon = $xPlayer->isWinner();
        $isOPlayerWon = $oPlayer->isWinner();

        $this->assertInternalType('bool', $isXPlayerWon);
        $this->assertInternalType('bool', $isOPlayerWon);
        $this->assertEquals($isXPlayerWon, true);
        $this->assertEquals($isOPlayerWon, false);
    }

    /**
     *  X | O | X
     *    | O |
     *    | O | X
     */
    public function testIsWinnerWithCompletedOValuesWillReturnTrueForOPlayerAndFalseForXPlayerWhereNoOnWon()
    {
        $gameBoard = new GameBoard();
        $xPlayer = new XPlayer($gameBoard);
        $oPlayer = new OPlayer($gameBoard);

        $xPlayer->remarkOnBoard(new Position(0, 0));
        $oPlayer->remarkOnBoard(new Position(0, 1));
        $xPlayer->remarkOnBoard(new Position(0, 2));
        $oPlayer->remarkOnBoard(new Position(1, 1));
        $xPlayer->remarkOnBoard(new Position(2, 2));
        $oPlayer->remarkOnBoard(new Position(2, 1));
        $isXPlayerWon = $xPlayer->isWinner();
        $isOPlayerWon = $oPlayer->isWinner();

        $this->assertInternalType('bool', $isXPlayerWon);
        $this->assertInternalType('bool', $isOPlayerWon);
        $this->assertEquals($isXPlayerWon, false);
        $this->assertEquals($isOPlayerWon, true);
    }
}