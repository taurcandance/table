<?php

namespace Book;


use TableLeg\TableLeg;

class Book extends TableLeg
{

    public function __construct(int $width, int $weight, string $color)
    {
        parent::__construct($width, $weight, $color);
    }

    public function getWidth()
    {
        return parent::getHeight();
    }
}