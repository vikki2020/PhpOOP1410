<?php

abstract class vehicle
{
    public $mark;
    public $speed;
    public $color;
    public $price;

    public function popular2020()
    {
        if ($this->mark == "BMW" && $this->color == "beige") {
            echo "I'm the best seller in 2020";
        }
    }

    public function __construct($mark, $speed, $color, $price)
    {
        $this->mark = $mark;
        $this->speed = $speed;
        $this->color = $color;
        $this->price = $price;
        $this->popular2020();
    }
}
