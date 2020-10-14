<?php
require_once "animal.class.php";

class cat extends animal
{
    public function selfVoice()
    {
        $this->voice();
        echo "<br> MIAOOOO, when I'm hungry :)";
    }

    public function __construct($name, $eyesColor, $skinColor, $weight)
    {
        parent::__construct($name, $eyesColor, $skinColor, $weight);
    }
}
