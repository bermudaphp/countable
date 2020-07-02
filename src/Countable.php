<?php


namespace Bermuda\Countable;


/**
 * Interface Countable
 * @package Bermuda\Countable
 */
interface Countable extends \Countable
{
    /**
     * @param bool $recursive
     * @return int
     */
    public function count(bool $recursive = false): int ;
}
