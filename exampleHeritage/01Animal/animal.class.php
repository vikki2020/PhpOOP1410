<?php
abstract class animal
{
    public $name;
    public $eyesColor;
    public $skinColor;
    public $weight;

    public function __construct($name, $eyesColor, $skinColor, $weight) //do we always need to create properties before constructor(4-7)?
    {
        $this->name = $name;
        $this->eyesColor = $eyesColor;
        $this->skinColor = $skinColor;
        $this->weight = $weight;
    }

    protected function voice()
    {
        echo "<br>My voice sounds like....";
    }

    public function eat()
    {
        echo "yummy..";
    }

    //how can we build an abstract method is parent class? and the purpose??
}
