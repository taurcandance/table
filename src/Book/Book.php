<?php

namespace Book;


class Book
{
    private $width;

    function __construct($width)
    {
        $this->width = $width;
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