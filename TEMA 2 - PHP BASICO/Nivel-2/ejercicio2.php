<?php 

    // Declaración e inicialización de un array asociativo "producto=>precio":

    $tienda=["chocolates" => 1, 
             "chicles" => 0.5,
             "caramelos" => 1.5];

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

    function crearCompra($paramTienda){
        foreach ($paramTienda as $producto => $precio) {
            $unidades=(pedirNumero("Introduce cuántos $producto se han comprado: "));
            $compra[$producto] = ["precio" => $precio, "cantidad" => $unidades];
        }
        return $compra;
    }

    function calcularImporte($paramCompra){
        $importeTotal = array_reduce($paramCompra, function($suma, $producto) {
                                                        return $suma + ($producto["cantidad"] * $producto["precio"]);
                                                   }
                                    ,0);
        return $importeTotal;
    }

    function imprimirTicket($paramCompra){
        echo "\n-- TICKET DE COMPRA --\n";
        foreach ($paramCompra as $producto => $datos) {
            echo $datos["cantidad"] . " " . $producto . " x " . $datos["precio"]. " eur/ud = " . $datos["cantidad"]*$datos["precio"] . " euros\n";
        }
        echo "-----------------------------------\n";
        echo "Importe total: " . calcularImporte($paramCompra) . " euros.\n";
    }

    // Comprobación:
    
    $compra = crearCompra($tienda);
    $importe = calcularImporte($compra);
    imprimirTicket($compra);

?>