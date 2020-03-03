<?php


namespace Halcyon\Collection;


/**
 * Interface Countable
 * @package Lobster\Countable
 */
interface Countable extends \Countable {

    /**
     * @param bool $recursive
     * @return int
     */
    public function count(bool $recursive = false) : int ;

}
