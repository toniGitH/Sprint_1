<?php

    require_once "Shape.php";
    require_once "Triangulo.php";
    require_once "REctangulo.php";
    
    // COMPROBACIONES:
    
    $figura1 = new Triangulo(5, 5);
    echo "El área de la figura es " . $figura1->area() . "\n";

    $figura2 = new Rectangulo(5, 5);
    echo "El área de la figura es " . $figura2->area() . "\n";

?>