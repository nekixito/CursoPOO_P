<?php
require_once("Account.php");
require_once("Car.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP</title>
</head>
<body>
    <h1>Practica de POO en PHP</h1>
    <?php
    $car = new Car("AMS234" , new Account("Andrés Herrera","ANDA876"));
    $car->printDataCar();
    $car2 = new Car("QWE567",new Account("Martha","MART789"));
    $car2->printDataCar();
    ?>
</body>
</html>