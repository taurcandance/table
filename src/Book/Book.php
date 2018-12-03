<?php

namespace Book;


class Book
{
    private $width;
    private $height;
    private $weight;
    private $color;
    private $thickness;


    public function __construct(int $thikness, int $width, int $height, int $weight, string $color)
    {
        $this->color     = $color;
        $this->weight    = $weight;
        $this->height    = $height;
        $this->width     = $width;
        $this->thickness = $thikness;
    }

    /**
     * Get Thickness.
     *
     * @return mixed
     */
    public function getThickness()
    {
        return $this->thickness;
    }

    /**
     * @param mixed $thickness
     */
    public function setThickness($thickness): void
    {
        $this->thickness = $thickness;
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
    public function setWidth($width): void
    {
        $this->width = $width;
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
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
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