<?php 

    // FUNCIÓN SOLICITADA:
    // NOTA: no he utilizado funciones como array_map(), array_reduce() o array_filter() porque entiendo que no son eficientes,
    // dado que siempre recorrerían todo el array de palabras, incluso aunque en la primera palabra ya no hubiera coincidencia.

    function coincidencia($paramArray, $paramLetra, $paramIndice){
        return ((strpos(strtolower($paramArray[$paramIndice]), strtolower($paramLetra)))===false)?false:true;
    }
    
    function revisarArray($paramArray, $paramLetra){
        $indice=0;
        do {
            $coincidencia = coincidencia($paramArray, $paramLetra, $indice);
            $indice++;
        } while ($coincidencia && $indice<count($paramArray));
        
        return $coincidencia;
    }

    // COMPROBACIÓN:
    $array = ["hola", "Php", "Html"];
    $letra = "h";
    var_dump(revisarArray($array, $letra)); // Devolverá true
    $array = ["hola", "Php", "Html"];
    $letra = "l";
    var_dump(revisarArray($array, $letra)); // Devolverá false


/* Las dos funciones anteriores han sustituido a ésta, porque es mejor encapsular la expresion booleana que da valor a la variable 
   $coincidencia dentro de una función.
    function revisarArray($paramArray, $paramLetra){
        $indice=0;
        do {
            $coincidencia = ((strpos(strtolower($paramArray[$indice]), strtolower($paramLetra)))===false)?false:true;
            $indice++;
        } while ($coincidencia && $indice<count($paramArray));
        
        return $coincidencia;
    }
*/

?>