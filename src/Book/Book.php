<?php

namespace Book;


class Book
{
    private $height;

    function __construct($height)
    {
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

}