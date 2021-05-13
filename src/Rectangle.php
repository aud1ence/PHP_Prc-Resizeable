<?php

namespace Src;

class Rectangle extends Shape implements Resizeable
{
    public float $width;
    public float $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function resize($percent)
    {
        return $percent * $this->calculateArea();
    }

    public function toArray($percent): array
    {
        return array("name" => $this->name,
            "beforeArea" => $this->calculateArea(),
            "afterArea" => $this->resize($percent)
        );
    }
}