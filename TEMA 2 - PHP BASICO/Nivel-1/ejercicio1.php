<?php 

    // Declaración e inicialización de una variable de cada tipo:

    $entero=5;
    $doble=5.5;
    $cadena="Hola Mundo!!";
    $boleano=true;

    // Impresión por pantalla de las variables anteriores:

    echo "La variable \$entero almacena el valor de tipo \"integer\": $entero <br><br>";
    echo "La variable \$doble almacena el valor de tipo \"double\": $doble <br><br>";
    echo "La variable \$cadena almacena el valor de tipo \"string\": $cadena <br><br>";
    echo "La variable \$boleano almacena el valor de tipo \"boolean\": $boleano, que en PHP equivale a \"true\" <br><br>";

    // Declaración e inicialización de una constante que almacena mi nombre:

    define("MI_NOMBRE", "Antonio");

    // Impresión por pantalla del contenido de la constante llamada MI_NOMBRE en formato título (h1):

    echo "<h1>Mi nombre es " . MI_NOMBRE. ".</h1>";

?>