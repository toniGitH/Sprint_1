<?php 

// DECLARAMOS EL ARRAY DE DOS DIMENSIONES DE ALUMNOS Y NOTAS CON EL QUE VAMOS A TRABAJAR:
$alumnos = array(
    "Antonio" => array(8,7,9,8,9),
    "Pedro" => array(9,7,6,5,3),
    "Ana" => array(8,8,5,6,7),
    "Miguel" => array(9,9,9,7,9),
    "María" => array(4,5,3,6,5),
);

// DEFINIMOS LAS FUNCIONES QUE VAMOS A NECESITAR:

function imprimeNotas($paramArray){ // Función para imprimir la lista de notas de cada alumno
    foreach ($paramArray as $nombre => $notas) {
        echo "Las notas de $nombre son las siguientes: ";
        foreach ($notas as $nota) {
            echo $nota . " ";
        }
        echo "\n";
    }
}

function manejaMedias($paramArray){ // Función para calcular la media de cada alumno y la media global e imprimirlo todo

    foreach ($paramArray as $nombre => $notas) {
        $media = (array_reduce($notas, function ($suma, $numero) {
            return ($suma + $numero);
        },0)) / count($notas);
        $mediasIndividuales[$nombre]=$media;
        echo "La nota media de $nombre es un $media \n";
    }

    $mediaGlobal = (array_reduce($mediasIndividuales, function ($suma, $numero) {
        return ($suma + $numero);
    }, 0)) / count($mediasIndividuales);

    echo "La nota media de la clase es un $mediaGlobal";

}

// COMPROBACIÓN

imprimeNotas($alumnos);

manejaMedias($alumnos);




?>