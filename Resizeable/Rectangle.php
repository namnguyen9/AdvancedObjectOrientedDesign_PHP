<?php
include_once('Shape.php');
include_once('interface.php');

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function RectangleArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    public function resize($percent)
    {
        $this->width = ($this->width + ($this->width * $percent / 100)) ;
        $this->height = ($this->height + ($this->height * $percent / 100));
    }

    public function GetArea()
    {
        return $this->height * $this->width;
    }
}
