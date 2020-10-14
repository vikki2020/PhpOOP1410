<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bank</title>
    </head>

    <body>
        <?php
        include "client.php";
        include "savingAccount.php";
        include "currentAccount.php";

        class Bank
        {
            private $balance;
            private $withdrawAmount;
            private $saveAmount;
            public function getBalance()
            {
                return $this->balance;
            }
            private function setBalance($balance)
            {
                $this->balance = $balance;
            }
            public function getWithdraw()
            {
                return $this->withdrawAmount;
            }
            public function setWithdraw($withdrawAmount)
            {
                $this->withdrawAmount = $withdrawAmount;
            }
            public function getSave()
            {
                return $this->saveAmount;
            }
            public function setSave($saveAmount)
            {
                $this->saveAmount = $saveAmount;
            }

            public function addMoney($addMoney)
            {
                return $this->balance += $addMoney;
            }
            public function withdrawMoney($withdrawMoney)
            {
                return $this->balance -= $withdrawMoney;
            }
            public function checkBalance()
            {
                return $this->balance;
            }

            public function block() //https://www.php.net/manual/en/language.oop5.decon.php
            {
                echo "account blocked";
            }
            public function unblock()
            {
                echo "account unblocked";
                return  $this->balance;
            }
        }
        ?>
    </body>

    </html>
</body>

</html>