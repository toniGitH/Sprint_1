<?php 

    // NOTA: he considerado que es un paso de contador cada minuto o fracción que pase de los 3 primeros minutos
    // (por ejemplo, una llamada de 3 minutos y un segundo ya supone un paso de contador)

    // DEFINIMOS LAS FUNCIONES QUE VAMOS A NECESITAR:    

    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || $numero<1) {
            do {
                $numero=readline("No has tecleado un número positivo. Escribe un número entero positivo: ");
            } while (!is_numeric($numero) || $numero<1);
        }
        return $numero;
    }
    
    function calculaCoste($paramMinutos, $paramRemanente){

        if ($paramMinutos<=3 && $paramRemanente==0) {
            $coste = 10;
        }
        else{
            if ($paramRemanente>0) {
                $coste = 15 + ($paramMinutos-3)*5;
            } else{
                $coste = 10 + ($paramMinutos-3)*5;
            }
        }

        return $coste;
    }

    // RESTO DEL PROGRAMA:

    $duracion = pedirNumero("Indica, en segundos, cuánto ha durado la llamada: ");
    $minutosLlamada = floor($duracion/60);
    $segundosRemanentes = $duracion%60;
    
    if ($segundosRemanentes>0) {
        echo "El coste de una llamada de $minutosLlamada minutos y $segundosRemanentes segundos es de ". calculaCoste($minutosLlamada, $segundosRemanentes) ." céntimos";
    }
    else{
        echo "El coste de una llamada de $minutosLlamada minutos es de ". calculaCoste($minutosLlamada, $segundosRemanentes) ." céntimos";
    }

?>