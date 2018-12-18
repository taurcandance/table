<?php

namespace LegOfJunk;

use Exception;
use TableLeg\TableLeg;

class LegOfJunk extends TableLeg
{
    private $parts = [];
    private $countParts;

    public function __construct(array $partsForLeg)
    {
        $this->parts      = $partsForLeg;
        $this->countParts = count($partsForLeg);
        $this->height     = self::getAmountHeight();
        $this->weight     = self::getAmountWeight();
    }

    private function getAmountHeight()
    {
        $getFullHeight = function ($carry, $item) {
            $carry += $item->getHeight();

            return $carry;
        };

        return array_reduce($this->parts, $getFullHeight);
    }

    private function getAmountWeight()
    {
        $getFullWeight = function ($carry, $item) {
            $carry += $item->getWeight();

            return $carry;
        };

        return array_reduce($this->parts, $getFullWeight);
    }

    public function getColor()
    {
        throw new Exception('Нет конкретного цвета');
    }
}