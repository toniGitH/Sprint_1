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

    // RESTO DEL PROGRAMA:

    $nota = pedirNumero("Escribe tu nota. Debe ser un número entero o decimal positivo entre 0 y 10: ");

    if ($nota>=6) {
        echo "Has obtenido un " . calculaPorcentaje($nota) . "%. Estás en PRIMERA DIVISIÓN";
    }
    else if ($nota>=4.5 && $nota<6) {
        echo "Has obtenido un " . calculaPorcentaje($nota) . "%. Estás en SEGUNDA DIVISIÓN";
    }
    else if ($nota>=3.3 && $nota<4.5) {
        echo "Has obtenido un " . calculaPorcentaje($nota) . "%. Estás en TERCERA DIVISIÓN";
    }
    else{
        echo "Has obtenido un " . calculaPorcentaje($nota) . "%. Estás SUSPENDIDO";
    }

?>