<?php


namespace Bermuda\Countable;


/**
 * @param iterable|Countable|\Countable $var
 * @param bool $recursive
 * @return int
 */
function count($var, bool $recursive = false): int
{
    if($var instanceof \Countable)
    {
        if($var instanceof Countable)
        {
            return $var->count($recursive);
        }
        
        return $recursive ? count($var, COUNT_RECURSIVE) : count($var);
    }
    
    if(is_iterable($var))
    {
        $num = 0;
    
        foreach($var as $item)
        {
            $num += is_iterable($item) ? count($item, $recursive) : 1;
        }
    
        return $num;
    }
    
    return $var == null ? 0 : 1;
}
