<?php
include_once('Rectangle.php');
include_once('interface.php');

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resize($percent)
    {
        $this->width = ($this->width + ($this->width * $percent / 100));
    }
}
