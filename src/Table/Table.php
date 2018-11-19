<?php

namespace Table;


use TableLeg\TableLeg;

class Table
{
    private $legs;
    private $weight;
    private $heightTableTop;
    private $weightTableTop;

    function __construct($legs, $weight, $weightTableTop, $heightTableTop)
    {
        $this->legs           = $legs;
        $this->weight         = $weight;
        $this->heightTableTop = $heightTableTop;
        $this->weightTableTop = $weightTableTop;
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
        return array_sum($this->weight) + $this->weightTableTop;
    }

    public function setNewTop($newTopWeight, $newTopHeight)
    {
        $this->weightTableTop = $newTopWeight;
        $this->heightTableTop = $newTopHeight;
    }

    public function getHeight()
    {
        return $this->heightTableTop + $this->getWeight();
    }

    public function setLeg($index, $newlegHeight, $newlegWeight)
    {
        $newLeg = new TableLeg($newlegHeight,$newlegWeight);
        $this->legs[$index] = $newLeg->getWeight();
    }

    public function getHigthestLeg()
    {
        sort($this->legs);
        return array_pop($this->legs);
    }
}