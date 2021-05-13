<?php

namespace Src;

class Square extends Rectangle implements Resizeable
{
    public float $width;

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
        $this->width = $width;
    }

    public function calculateArea()
    {
        return parent::calculateArea();
    }

    public function resize($percent)
    {
        return $percent * $this->calculateArea();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}