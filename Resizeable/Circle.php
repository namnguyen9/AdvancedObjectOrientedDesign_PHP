<?php
include_once('Shape.php');
include_once('interface.php');


class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function CircleArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function resize($percent)
    {
        $this->radius = ($this->radius + ($this->radius * $percent / 100));
    }

    public function GetArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
