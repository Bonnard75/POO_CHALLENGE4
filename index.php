<?php

require_once 'Car.php';


$Car = new Car('skyblue',4,'Electric');
$Car->sethasParkBrake(true);

echo "<br>";

try {
    $Car->start();
}catch (Exception $e){
    echo "Exception received  : ". $e->getMessage() ;
    echo "<br>";
    echo "<br>";
} finally {
    echo "Ma voiture roule comme un donut bien gras !!!!";
    echo "<br>";
}

