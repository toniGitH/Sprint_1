<?php 

    //Creamos un array vacío:

    $miArray=[];

    // Añadimos 5 números enteros:

    array_push($miArray, 1,2,3,4,5);

    // Impresión de los elementos del array, de uno en uno:

    foreach ($miArray as $numero){
        echo $numero . "\n";
    }

?>