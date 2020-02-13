<?php
class Circle
{
    public string $name;
    public float $radius;
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getName()
    {
        return $this->name;
    }
}
?>