<?php
namespace TableLeg;


class TableLeg
{
    private $height;
    private $weight;


    function __construct($height, $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    /**
     * Get Weight.
     *
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;

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