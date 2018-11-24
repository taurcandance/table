<?php

namespace Table;


use TableLeg\TableLeg;
use TableTop\TableTop;

class Table
{
    private $legs = array();
    private $tableTop;
    private $countLegs;

    public function __construct(TableTop $tableTop, array $legs = null)
    {
        if(!is_null($legs))
        {$this->legs     = $legs;}
        $this->tableTop = $tableTop;
        $this->countLegs = 0;
    }

    public function addLeg(int $height, int $weight, string $color)
    {
        $this->countLegs++;
        $this->legs[] = new TableLeg($height, $weight, $color);
    }

    public function checkStabilization()
    {
        if(count($this->legs) < 3){return false;}

        $legsHeightArray = array();
        foreach ($this->legs as $leg) {
            $legsHeightArray[] = $leg->getHeight();
        }

        $stable = true;
        $diff   = array_sum($legsHeightArray) / count($legsHeightArray);
        foreach ($legsHeightArray as $legHeight) {
            if (abs($legHeight - $diff) > 10) {
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
        $legsWeightArray = array();
        foreach ($this->legs as $leg) {
            $legsWeightArray[] = $leg->getWeight();
        }

        return array_sum($legsWeightArray) + $this->tableTop->getWeight();
    }

    public function setNewTop($newTableTop)
    {
        $this->tableTop = $newTableTop;
    }

    public function getHeight()
    {
        return $this->tableTop->getHeight() + $this->getHighestLegHeight();
    }

    public function getHighestLegHeight()
    {
        $legsHeightArray = array();
        foreach ($this->legs as $leg) {
            $legsHeightArray[] = $leg->getHeight();
        }
        sort($legsHeightArray);

        return array_pop($legsHeightArray);
    }

    public function getHighestLeg()
    {
        $i          = 0;
        $elem       = 0;
        $indexFound = false;
        foreach ($this->legs as $leg) {
            if ($elem < $leg->getHeight()) {
                $elem       = $leg->getHeight();
                $indexFound = $i;
            }
            $i++;
        }

        return $this->legs[$indexFound];
    }

    /**
     * Get CountLegs.
     *
     * @return int
     */
    public function getCountLegs(): int
    {
        return $this->countLegs;
    }
}