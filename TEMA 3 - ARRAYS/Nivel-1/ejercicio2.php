<?php 

    // Array inicial:
    $X = array(10, 20, 30, 40, 50, 60);

    // Imprimimos longitud del array
    echo count($X) . "\n";

    // Verificamos elementos del array y sus índices
    var_dump($X) . "\n";

    // Aplicamos la función array_splice() para eliminar uno de los elementos del array
    // Tras aplicar esta función sobre el array, los elementos "supervivientes" quedan indexados en orden automáticamente
    array_splice($X, 3, 1); // Eliminamos el elemento en la posición 3, el número 40

    // Imprimimos la longitud del array tras aplicar la función array_splice()
    echo count($X) . "\n";

    // Volvemos a imprimir los elementos con sus índices para verificar que están reordenados
    var_dump($X) . "\n";

?>