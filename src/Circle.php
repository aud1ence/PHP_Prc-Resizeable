<?php
//include_once "Shape.php";
//include_once "Resizeable.php";
namespace Src;

class Circle extends Shape implements Resizeable
{
    public float $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
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