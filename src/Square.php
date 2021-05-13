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

    public function toArray($percent): array
    {
        return array("name" => $this->name,
            "beforeArea" => $this->calculateArea(),
            "afterArea" => $this->resize($percent)
        );
    }
}