<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currentAccount</title>
</head>
<body>
    <?php
    class CurrentAccount{
        private $balance;
        public function getCurrentBalance()
        {
            return $this->balance;
        }
        public function setCurrentBalance($tempBalance)
        {
            $this->balance = $tempBalance;
        }

    }

    
    ?>
    
</body>
</html>