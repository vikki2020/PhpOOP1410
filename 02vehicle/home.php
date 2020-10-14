<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "moto.class.php";
    require_once "truck.class.php";
    require_once "bus.class.php";

    $bus1 = new bus("BMW", "200km", "beige", 5000);
    var_dump($bus1);

    $truck1 = new truck("BENZ", 500, "green", 20000, "transportPig");
    var_dump($truck1);
    $moto1 = new moto("TOYOTA", 150, "blue", 1000);
    var_dump($moto1);



    ?>
</body>

</html>