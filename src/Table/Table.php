<?php

namespace Table;


use TableLeg\TableLeg;

class Table
{
    private $legs;

    function __construct($legs)
    {
        $this->legs = $legs;
    }

    function checkStabilization()
    {
        if ($this->legs[0] !== $this->legs[1] |
            $this->legs[1] !== $this->legs[2] |
            $this->legs[2] !== $this->legs[3] |
            $this->legs[3] !== $this->legs[0]) {
            return 'Not stable';
        } else {
            return 'stable!';
        }
    }
}