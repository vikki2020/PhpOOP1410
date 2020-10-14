<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saving account</title>
</head>

<body>
    <?php
    class SavingAccount
    {
        private $balance;
        public function getSavingBalance()
        {
            return $this->balance;
        }
        public function setSavingBalance($tempBalance)
        {
            $this->balance = $tempBalance;
        }
    }
    ?>
</body>

</html>