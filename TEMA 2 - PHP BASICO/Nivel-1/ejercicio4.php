<?php 

    echo "\n\nPROGRAMA CUENTA HASTA...\n\n";

    // DECLARACIÓN DE LAS DOS FUNCIONES QUE SE VAN A UTILIZAR EN EL PROGRAMA:

    // Función que solicita al usuario un número, y valida que sea un valor numérico y además, positivo
    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || $numero<1) {
            do {
                $numero=readline("No has tecleado un número positivo. Escribe un número entero positivo: ");
            } while (!is_numeric($numero) || $numero<1);
        }
        return $numero;
    }

    /* Función que recibe dos parámetros. Uno de ellos ($paramHasta) tomará un valor por defecto (10) en caso de que no se le asigne
       un valor concreto en la llamada a la función. Este tipo de parámetros se deben poner después de los parámetros que no tienen 
       valor por defecto*/
    function contar($paramPaso, $paramHasta=10){ 
        echo "Empezamos a contar...\n\n";
        sleep(2); // Introduce un lapso de tiempo hasta ejecutar la siguiente instrucción
        for ($num=0; $num<=$paramHasta ; $num+=$paramPaso) { 
            echo $num . " - ";
            sleep(1);
        }
        echo "Se acabó";
        sleep(2);
    }

    // RESTO DEL PROGRAMA:

    $paso=pedirNumero("¿De cuánto en cuánto quieres contar (de 1en1, de 2en2, de 3en3, ...)?: ");

    $respuesta=readline("¿Deseas establecer hasta que número contar (s/n)?: ");

    if ($respuesta=="s" || $respuesta=="S") {
        $hasta=pedirNumero("¿Hasta qué número quieres contar?: ");
        contar($paso, $hasta);
    }
    else{
        contar($paso);
    }
?>