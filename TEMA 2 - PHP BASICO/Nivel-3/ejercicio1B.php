<?php 

    // SOLUCIÓN ALTERNATIVA A LA VERSIÓN 1

    // Definimos las funciones que vamos a necesitar: 

    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || $numero<3) {
            do {
                $numero=readline("No has tecleado un número natural mayor que 2. Inténtalo de nuevo: ");
            } while (!is_numeric($numero) || $numero<3);
        }
        return $numero;
    }

    function creaArrayInicial($paramNumFinal){
        $arrayInicial=[];
        for ($i=2; $i <=$paramNumFinal ; $i++) { 
            $arrayInicial[]=$i;
        }
        return $arrayInicial;
    }

    function esPrimo($paramNumElegido) {
        $primo=true;
        $num_secundario = $paramNumElegido-1;

        while ( (($paramNumElegido%$num_secundario)!=0) && ($num_secundario>1) ) {
            $num_secundario--;
        }
        
        if ($num_secundario>1) {
            $primo=false;
        }
        
        return $primo;
        
    }

    function creaArrayFinal($paramArray){
        $arrayFinal=[];
        for ($i=0; $i < count($paramArray) ; $i++) { 
            $validacion=esPrimo($paramArray[$i]);
            if ($validacion==true) {
                $arrayFinal[]=$paramArray[$i];
            }
        }
        return $arrayFinal;
    }

    // Resto del programa

    $numero = pedirNumero("Escribe un número natural mayor que 2: ");

    $arrayInicial = creaArrayInicial($numero);

    $arrayFinal = creaArrayFinal($arrayInicial);

    echo "DADO ESTE ARRAY DE NÚMEROS:\n";

    print_r(creaArrayInicial($numero));

    echo "OBTENEMOS ESTE ARRAY DE NÚMEROS PRIMOS:\n";

    print_r(creaArrayFinal($arrayInicial));

?>