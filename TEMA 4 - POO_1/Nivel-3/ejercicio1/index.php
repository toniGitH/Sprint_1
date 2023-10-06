<?php

    // INCLUIMOS LOS ARCHIVOS NECESARIOS:
    require_once "funciones.php";
    require_once "Cine.php";
    require_once "Pelicula.php";

    // DECLARAMOS LAS VARIABLES QUE VAMOS A NECESITAR:
    $todosLosCines=[]; // Vamos a necesitar este array para guardar aquí TODOS los objetos de tipo Cine que vayamos creando
    $todasLasPelis=[]; // Vamos a necesitar este array para guardar aquí TODOS los objetos de tipo Pelicula que vayamos creando

    // INICIAMOS EL PROGRAMA:
    menuPrincipal($todosLosCines, $todasLasPelis);

?>