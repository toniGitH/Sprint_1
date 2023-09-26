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

    function calcularCoste($paramDuracion){
        $minutos=floor($paramDuracion/60);
        $segundos=$paramDuracion%60;
        
        if ($paramDuracion<180) {
            echo "El coste de una llamada de " . $minutos . " minutos y " . $segundos . " segundos es de 10 céntimos.";
        }
        else {
            if ($segundos>0) {
                echo "El coste de una llamada de " . $minutos . " minutos y " . $segundos . " segundos es de " . (15 + ($minutos-3)*5) . " céntimos";
            } else{
                echo "El coste de una llamada de " . $minutos . " minutos y " . $segundos . " segundos es de " . (10 + ($minutos-3)*5) . " céntimos";
            }
        } 
    }

    // COMPROBACION:

    calcularCoste(pedirNumero("Introduce el tiempo de duración de la llamada en segundos: "));

?>