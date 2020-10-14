<?php
require_once "vehicle.class.php";

class truck extends vehicle
{

    public $style;
    public function __construct($mark, $speed, $color, $price, $style)
    {
        parent::__construct($mark, $speed, $color, $price);
        $this->style = $style;
        if (($this->style) == "transportOil" || ($this->speed) >= 200) {
            echo "you need T licence to drive this truck";
        }
    }
}
