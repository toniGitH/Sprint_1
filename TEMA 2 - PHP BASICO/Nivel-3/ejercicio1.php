<?php 

    // SOLUCIÓN SIGUIENDO EL ALGORITMO DE ERATÓSTENES

    // Declaramos las funciones que vamos a necesitar:

    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || $numero<3) {
            do {
                $numero=readline("No has tecleado un número natural mayor que 2. Inténtalo de nuevo: ");
            } while (!is_numeric($numero) || $numero<3);
        }
        return $numero;
    }

    function creaArrayNums($paramLimite){
        $arrayNums=[];
        for ($i=2; $i <=$paramLimite ; $i++) { 
            $arrayNums[]=$i;
        }
        return $arrayNums;
    }

    function eratostenes($paramArrayNums, $paramLimite){
        
        $contador=0;

        do {
            $primo=$paramArrayNums[$contador];
        
            for ($i=0; $i < count($paramArrayNums) ; $i++) { 
                if((($paramArrayNums[$i]%$primo)==0) && (($paramArrayNums[$i])!=$primo)){
                    array_splice($paramArrayNums, $i, 1);
                }
            }
        
            $contador++;
        
        }
        while (pow($paramArrayNums[$contador],2)<$paramLimite);

        return $paramArrayNums;
    }

    function imprimeArray($paramArray){
        for ($i=0; $i < count($paramArray); $i++) { 
            echo $paramArray[$i] . " ";
        }
    }

    // Resto de código:

    $limite = pedirNumero("Escribe un natural mayor que 2: ");

    $arrayNums= creaArrayNums($limite);

    $arrayPrimos = eratostenes($arrayNums, $limite);

    echo "Los números primos que hay entre el número 2 y el número $limite son los siguientes:\n";

    imprimeArray($arrayPrimos);

?>