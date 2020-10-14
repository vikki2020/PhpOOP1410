<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once "employe.class.php";
    require_once "manager.class.php";

    $employe1 = new employe("regular", 2000);
    var_dump($employe1);
    $employe1->addSalary(2000);
    $manager1 = new manager("manager", 2500, "TEC");
    var_dump($manager1);
    $manager1->addSalary(2500);




    ?>
</body>

</html>