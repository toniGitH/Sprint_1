<?php 

    // Declaración e inicialización de una variable de tipo "string" que almacena el valor Hello, World!

    $saludo = "Hello, World!";

    // Impresión por pantalla del contenido de la variable $saludo:

    echo "La variable \$saludo almacena la cadena: $saludo <br><br>";

    // Conversión de todos los caracteres de $saludo a mayúsculas e impresión por pantalla:

    echo "La variable \$saludo transformada a mayúsculas es: " . strtoupper($saludo) . "<br><br>";

    // Obtención de la longitud de la variable $saludo e impresión por pantalla:

    echo "La longitud de la variable \$saludo es de " . strlen($saludo) . " caracteres.<br><br>";

    // Inversión del orden de los caracteres del string $saludo e impresión por pantalla:

    echo "El contenido de la variable \$saludo invertido sería: " . strrev($saludo) . "<br><br>";

    // Creamos una nueva variable con el contenido  “Aquest és el curs de PHP”:

    $frase = "Aquest és el curs de PHP";

    // Impresión por pantalla de los strings $saludo y $frase concatenados:

    echo $saludo . " " . $frase;

?>