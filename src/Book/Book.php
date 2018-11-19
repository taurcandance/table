<?php

namespace Book;


class Book
{
    private $width;
    private $weight;

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

}