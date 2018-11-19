<?php
namespace TableLeg;


class TableLeg
{
    private $height;

    function __construct($height)
    {
        $this->height = $height;
    }

    /**
     * Get HeightLeg.
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;

    }
}