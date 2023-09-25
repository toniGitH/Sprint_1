<?php 

    // Definimos un array de palabras (strings):
    $palabras = ["casa", "coche", "perro", "gato", "pan", "vaso"];

    // Utilizamos la función array_filter();
    $palabrasPares = array_filter($palabras, function($elemento){return strlen($elemento)%2==0;});

    // Sintáxis alternativa:
    //$palabrasPares = array_filter($palabras, fn($elemento)=>strlen($elemento)%2==0);

    // Comprobación
    var_dump($palabrasPares2);

?>