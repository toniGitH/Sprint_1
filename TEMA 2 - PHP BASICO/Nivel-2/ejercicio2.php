<?php 

    // Declaración e inicialización de las variables y los arrays que vamos a necesitar:
    $mensajes=["Cuántas tabletas de chocolate se han comprado?: ",
            "Cuántos chicles se han comprado?: ",
            "Cuántos caramelos se han comprado?: "
            ];
    $productos=["chocolates", "chicles", "caramelos"];
    $precios=[1, 0.5, 1.5];

    // Definición de las funciones que vamos a necesitar:
    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || ($numero<0)) {
            do {
                $numero=readline("No has tecleado un número positivo. Vuelve a intentarlo: ");
            } while (!is_numeric($numero) || ($numero<0));
        }
        return $numero;
    }

    function crearCompra($paramMensajes){
        for ($i=0; $i<3 ; $i++) { 
            $unidades[$i]=(pedirNumero($paramMensajes[$i]));
        }
        return $unidades;
    }

    function calcularTotal($paramUnidadesCompradas, $paramPrecios){
        $suma=0;
        for ($i=0; $i<count($paramUnidadesCompradas) ; $i++) { 
            $suma+=($paramUnidadesCompradas[$i]*$paramPrecios[$i]);
        }
        return $suma;
    }

    function imprimirCompra($paramUnidadesCompradas, $paramProductos, $paramPrecios, $paramSumaTotal){
        echo "\nCOMPRA REALIZADA: \n";
        for ($i=0; $i<count($paramUnidadesCompradas) ; $i++) { 
            echo $paramUnidadesCompradas[$i] . " " . $paramProductos[$i] . " x " . $paramPrecios[$i] . " euros/ud = " . ($paramUnidadesCompradas[$i]*$paramPrecios[$i]) . " euros.\n";
        }
        echo "\nEl valor total de la compra es de $paramSumaTotal euros.\n\n";
    }

    // Resto del programa
    $unidadesCompradas=crearCompra($mensajes);
    $sumaTotal=calcularTotal($unidadesCompradas, $precios);
    imprimirCompra($unidadesCompradas, $productos, $precios, $sumaTotal);

?>