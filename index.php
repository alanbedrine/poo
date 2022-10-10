<?php 

    // Bike
    require_once 'Bicycle.php';
    $bike = new Bicycle('blue');

    $bike->setCurrentSpeed(0);
    $bike->setNbSeats(1);
    $bike->setnbWheels(2);

    // Moving bike
    echo $bike->forward();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();
    echo '<br> <br>';

    require_once 'car.php';
    $car = new Car('blue', 4, 'diesel');
    echo $car->start();
    echo $car->forward();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h </br>';
    echo $car->brake();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h </br>';
    
?>