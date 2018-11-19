<?php

namespace Book;


class Book
{
    private $width;
    private $weight;
    private $color;

    function __construct($width, $weight)
    {
        $this->width = $width;
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
     * Get Height.
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;

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