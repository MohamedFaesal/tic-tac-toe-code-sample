<?php

namespace TICTACTOETest;

use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * TicTacToeTestCase Class is a parent class for any tic tac toe unit test class
 * @package TICTACTOETest
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class TicTacToeTestCase extends TestCase
{
    public function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }
}