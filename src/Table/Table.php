<?php

namespace Table;


class Table
{
    private $legs;
    private $weight;

    function __construct($legs, $weight)
    {
        $this->legs = $legs;
        $this->weight = $weight;
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

    /**
     * Get Wight.
     *
     * @return mixed
     */
    public function getWeight()
    {
        return array_sum($this->weight);
    }
}