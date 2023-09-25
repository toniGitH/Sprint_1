<?php 

    $array1=[1, 2, 5.5, 4, 9.6, 6, 10];
    $array2=[0.5, 2, 5, 9.6, 8, 10];

    $arrayInterseccion = array_intersect($array1, $array2);

    $arrayMezcla = array_merge($array1, $array2);

    // Impresión de resultados:

    echo "ELEMENTOS DEL ARRAY DE INTERSECCIÓN:\n";
    foreach ($arrayInterseccion as $numero) {
        echo $numero . " ";
    }

    echo "\n\n";

    echo "ELEMENTOS DEL ARRAY DE MEZCLA:\n";

    foreach ($arrayMezcla as $numero) {
        echo $numero . " ";
    }


?>