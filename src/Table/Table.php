<?php

namespace Table;


use TableLeg\TableLeg;
use TableTop\TableTop;

class Table
{
    private $legs;
    private $tableTop;
    private $countLegs;

    public function __construct(TableTop $tableTop, array $legs = null)
    {
        $this->tableTop = $tableTop;
        if (is_null($legs)) {
            $this->legs      = [];
            $this->countLegs = 0;
        } else {
            $this->legs      = $legs;
            $this->countLegs = count($legs);
        }
    }

/**/
    public function addLeg(TableLeg $newLeg)
    {
        $this->legs[] = $newLeg;
        $this->countLegs++;
    }

/**/
    public function checkStabilization()
    {
        if (count($this->legs) < 3) {
            return false;
        }

        $sumHeightsLegs = function ($carry, $item) {
            $carry += $item->getHeight();
            return $carry;
        };
        $sumHeight      = array_reduce($this->legs, $sumHeightsLegs, $initVal = 0);
        $diff           = $sumHeight / $this->countLegs;
        $bool           = true;
        array_walk(
            $this->legs,
            function ($item) use ($diff, &$bool) {
                if (abs($diff - $item->getHeight()) > 10) {
                    return $bool = false;
                }
            }
        );

        return $bool;
    }

/**/
    public function getWeight()
    {
        $getFullWeight = function ($carry, $item) {
            $carry += $item->getWeight();

            return $carry;
        };

        return array_reduce($this->legs, $getFullWeight) + $this->tableTop->getWeight();
    }

/**/
    public function setNewTop($newTableTop)
    {
        $this->tableTop = $newTableTop;
    }

/**/
    public function getHeight()
    {
        return $this->tableTop->getHeight() + $this->getHighestLegHeight();
    }

/**/
    public function getHighestLegHeight()
    {
        return self::getHighestLeg()->getHeight();
    }

/**/
    public function getHighestLeg()
    {
        $getMaxHeightLeg = function ($carry, $item) {
            if ($carry->getHeight() < $item->getHeight()) {
                return $item;
            } else {
                return $carry;
            }
        };

        return array_reduce($this->legs, $getMaxHeightLeg, $this->legs[0]);
    }

/**/
    public function getCountLegs(): int
    {
        return $this->countLegs;
    }
}