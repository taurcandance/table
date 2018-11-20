<?php

namespace Book;


class Book
{
    private $width;
    private $weight;
    private $color;

    function __construct($width, $weight, $color)
    {
        $this->width  = $width;
        $this->weight = $weight;
        $this->color  = $color;
    }

    /**
     * Get Width.
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setHeight($width): void
    {
        $this->width = $width;
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
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
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