<?php

namespace Book;


use TableLeg\TableLeg;

class Book extends TableLeg
{
    public function getWidth()
    {
        return parent::getHeight();
    }
}