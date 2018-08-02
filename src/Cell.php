<?php

namespace TICTACTOE;

/**
 * Cell Class represents tic tac toe cell that will hold player value
 * @package TICTACTOE
 * @author Mohammed Faesal <mohamed.feasal@gmail.com>
 */
class Cell
{
    /**
     * @const Cell::X_MARK represent X value that will played with a player
     */
    const X_MARK = 'X';

    /**
     * @const Cell::O_MARK represent O value that will played with a player
     */
    const O_MARK = 'O';

    /**
     * @var string cell value
     */
    private $value;

    /**
     * get cell value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return array contain possible cell values
     */
    public static function getCellValues() : array
    {
        $values = [
            self::X_MARK, self::O_MARK
        ];
        return $values;
    }

    /**
     * set cell value
     * @param string $cellValue cell value
     * @throws \Exception if sent cell value is not valid
     */
    public function setValue(string $cellValue)
    {
        if (!in_array($cellValue, $this->getCellValues())) {
            throw new \Exception("Invalid cell value.");
        }
        $this->value = $cellValue;
    }
}