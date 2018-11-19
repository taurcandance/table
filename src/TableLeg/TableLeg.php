<?php
namespace TableLeg;


class TableLeg
{
    private $height;
    private $weight;
    private $color;


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

    /**
     * Get Color.
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;

    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

}