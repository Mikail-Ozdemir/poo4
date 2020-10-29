index.php
<?php


require_once 'car.php';
require_once 'bicycle.php';
require_once 'vehicle.php';
require_once 'truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$doodge = new Car("black", 4, "petrol");


// Moving Doodge challenger
echo $doodge->start();
echo '<br> Démarrage ok' . '<br>';
echo $doodge->forward();
echo '<br> Vitesse de la voiture : ' . $doodge->getCurrentSpeed() . ' km/h' . '<br>';
echo $doodge->brake();
echo '<br> Vitesse de la voiture : ' . $doodge->getCurrentSpeed() . ' km/h' . '<br>';
  
try{
    echo " je démarre " ;
    $doodge->start();
}catch(Exception $e){
    $doodge->setLeFreinDePark(false);
    echo $e->getMessage() . "je déscend le frein de park et je réessaye";
    $doodge->start();
} finally{
    echo "Ma benz benz benz";
}

