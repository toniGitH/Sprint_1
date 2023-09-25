<?php 

    $arrayEnteros = [4, 5, 6, 8, 7, 2, 1, 5, 4];

    $potencia=3; // Sólo cambiando este valor, tal y como hemos construido la función array_map(), podemos obtener un nuevo array con los
                // números elevados a 2, 3, 4, etc...

    // Utilizamos la función array_map():
    $arrayCubos = array_map(function($numero)use($potencia){return pow($numero, $potencia);} , $arrayEnteros);

    // Sintáxis alternativa:
    //$arrayCubos = array_map( fn($numero) => pow($numero, $potencia), $arrayEnteros );

    // Comprobación:
    var_dump($arrayCubos);

?>