<?php

namespace Table;


class Table
{
    private $legs;

    function __construct($legs)
    {
        $this->legs = $legs;
    }

    function checkStabilization()
    {
        $stable = true;
        $diff   = array_sum($this->legs) / count($this->legs);
        foreach ($this->legs as $leg) {
            if (abs($leg - $diff) > 10) {
                return $stable = false;
            }
        }
        return $stable;
    }
}