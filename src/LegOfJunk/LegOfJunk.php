<?php

namespace LegOfJunk;


use TableLeg\TableLeg;

class LegOfJunk extends TableLeg
{
    private $parts = [];
    private $countParts;
    protected $height;
    protected $weight;
    protected $color = '';


    public function __construct(array $partsForLeg)
    {
        $this->parts      = $partsForLeg;
        $this->countParts = count($partsForLeg);
        $this->height     = self::getAmountHeight();
        $this->weight     = self::getAmountWeight();
        $this->color      = self::getPatsColor();
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

    private function getPatsColor()
    {
        $getColorString = function ($carry, $item) {
            if (is_null($carry)) {
                $carry .= $item->getColor();
            }
            $carry .= '+'.$item->getColor();

            return $carry;
        };

        return array_reduce($this->parts, $getColorString);
    }

}