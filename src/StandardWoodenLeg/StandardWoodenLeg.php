<?php

namespace StandardWoodenLeg;


use TableLeg\TableLeg;

class StandardWoodenLeg extends TableLeg
{
    public $material = 'wood';

    public function __construct(int $height, int $weight, string $color, string $material = null)
    {
        parent::__construct($height, $weight, $color);
        if( ! is_null($material)) { $this->material = $material; }
    }
}