<?php
require_once "vehicle.class.php";
class bus extends vehicle
{

    public function __construct($mark, $speed, $color, $price)
    {
        parent::__construct($mark, $speed, $color, $price);
    }
}
