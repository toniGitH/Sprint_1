<?php 

    require_once "Car.php";

    $coche1 = new Car("Seat", "BCD1234", tipoCombustible::DIESEL,205);
    echo "El coche de la marca " . $coche1->getMarca() . " cuya matrícula es " .$coche1->getMatricula(). ", funciona con combustible " . strtolower($coche1->getCombustible()->name) . " y alcanza una velocidad máxima de " . $coche1->getMaxSpeed() . " km/h.\n"; 
    echo "Y ahora dice: " . $coche1 -> boost();
?>