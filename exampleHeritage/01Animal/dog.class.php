<?php
require_once "animal.class.php";
//class in miniscule?
class dog extends animal

{
    public $race;

    public function selfVoice()
    {
        $this->voice();
        echo "<br> BFFFFF, when I'm hungry :)";
    }
    public function __construct($name, $eyesColor, $skinColor, $weight, $race)
    {

        parent::__construct($name, $eyesColor, $skinColor, $weight);
        $this->race = $race;
    }
}
