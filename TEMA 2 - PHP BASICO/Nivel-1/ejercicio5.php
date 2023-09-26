<?php 

    // DEFINIMOS LAS FUNCIONES QUE VAMOS A NECESITAR:

    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || ($numero<0||$numero>10)) {
            do {
                $numero=readline("No has tecleado un número positivo entre 0 y 10. Vuelve a intentarlo: ");
            } while (!is_numeric($numero) || ($numero<0||$numero>10));
        }
        return $numero;
    }

    function calculaPorcentaje($paramValor){
        return ($paramValor/10)*100;
    }

    function evaluarNota($paramNota){
        if ($paramNota<3.3) {
            echo "Has obtenido un " . calculaPorcentaje($paramNota) . "%. Estás SUSPENDIDO";
        }
        else if($paramNota<4.5){
            echo "Has obtenido un " . calculaPorcentaje($paramNota) . "%. Estás en TERCERA DIVISIÓN";
        }
        else if($paramNota<6){
            echo "Has obtenido un " . calculaPorcentaje($paramNota) . "%. Estás en SEGUNDA DIVISIÓN";
        }
        else{
            echo "Has obtenido un " . calculaPorcentaje($paramNota) . "%. Estás en PRIMERA DIVISIÓN";
        }
    }

    // COMPROBACIÓN:

    evaluarNota($nota = pedirNumero("Escribe tu nota. Debe ser un número entero o decimal positivo entre 0 y 10: "));
    
?>