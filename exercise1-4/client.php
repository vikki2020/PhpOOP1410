<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>
</head>

<body>
    <?php
    //ex2. For the Person class we are missing the methods to read / modify the “first name” property. Create them and test them!
    //1.without get,set neither constructor
    // class Klient
    // {
    //     public $firstName;
    //     public $familyName;
    // }

    // $k1 = new Klient();

    // $k1->firstName = "v";
    // $k1->familyName = "w";
    // var_dump($k1);


    class Client
    {

        private $firstName;
        private $familyName;
        private $accountNr;
        private $civilStatus;

        // 3-1.using constructor-need to set value for paras constructor!
        public function __construct($firstName = "", $familyName = "", $accountNr = "")
        {
            $this->firstName = $firstName;
            $this->familyName = $familyName;
            $this->accountNr = $accountNr;
        }

        public function getFirstName() //2. using get set
        {
            return $this->firstName;
        }
        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        public function getFamilyName()
        {
            return $this->familyName;
        }
        public function setFamilyName($familyName)
        {
            $this->familyName = $familyName;
        }
        public function getAccountNr()
        {
            return $this->accountNr;
        }
        public function setAccountNr($accountNr)
        {
            $this->accountNr = $accountNr;
        }

        public function getCivil()
        {
            return $this->civilStatus;
        }
        private function setCivil($civilStatus)
        {
            $this->civilStatus = $civilStatus; //ex4 add civil status and method to read
        }
        public function display($firstName, $familyName) //ex3 display()
        {
            echo "I'm a person and my name is " . $firstName . " " . $familyName;
        }
    }

    $c1 = new Client();
    $c1->setFirstName("vikki");
    $c1->setFamilyName("wang");
    $c1->setAccountNr("BE00001111");
    echo $c1->getFirstName() . "<br>";
    echo $c1->getFamilyName() . "<br>";
    echo $c1->getAccountNr() . "<br>";
    var_dump($c1);
    //3-2.
    $c2 = new Client("amy", "tsai", "BE00002222");
    $c2->setFirstName("lalla");
    var_dump($c2);
    $c3 = new Client(); //ex3 display()
    $c3->display("lolo", "lili"); //ex3 display()


    ?>
</body>

</html>