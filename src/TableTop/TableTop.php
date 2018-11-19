<?php

namespace TableTop;


class TableTop
{
    private $height;
    private $weight;

    public function __construct($height, $weight)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    /**
     * Get Height.
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;

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
}