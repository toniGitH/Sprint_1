<?php 

    /* ENUNCIADO: 
        Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
        Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le
        aplica el método.
        Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
        Realiza una aplicación que permita echar cinco dados de póquer a la vez.
        Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.
    */

    // Incluimos los archivos necesarios:

    require_once "pokerDice.php";
    require_once "funciones.php";

    // Para poner en marcha el programa, llamamos a la función jugar():

    jugar();
 
?>