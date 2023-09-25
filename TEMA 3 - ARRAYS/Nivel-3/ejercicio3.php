<?php 

// Primero definimos la función a la que, pasado un número entero, nos devuelve true si el número es primo y false si no lo es:
function esPrimo($paramNumElegido) {
    $primo=true;

    if ($paramNumElegido==1) {
        $primo=false;
    } 
    else{
        $num_secundario = $paramNumElegido-1;

        while ( (($paramNumElegido%$num_secundario)!=0) && ($num_secundario>1) ) {
            $num_secundario--;
        }
        
        if ($num_secundario>1) {
            $primo=false;
        }
    }
    return $primo;
    
}

/* Definimos una función que recibirá como parámetro un array de números enteros.
   Dentro de esta funcion, utilizaremos la función "esPrimo" y la función array_reduce() para hallar la suma de los números del
   array que le hemos pasado por parámetro, pero sólo de aquellos que sean primos:*/
function sumaPrimos($paramArray){
    $solucion = array_reduce($paramArray, function($acumulado, $elemento){
                                            if (esPrimo($elemento)) {
                                                return($acumulado+$elemento);
                                          }
                return $acumulado;}, 0);
    return $solucion;
}

// Comprobación. Dados estos dos arrays de números enteros:
$array1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]; // La suma de los primos debería ser 41
$array2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]; // La suma de los primos debería ser 77

echo "Los números primos del array1 es " . sumaPrimos($array1) . "\n";
echo "Los números primos del array2 es " . sumaPrimos($array2) . "\n";




?>