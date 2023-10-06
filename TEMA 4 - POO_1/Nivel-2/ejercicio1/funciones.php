<?php 

    // Funciones que vamos a utilizar:

    function sioNo($paramMensaje){
        $continuar=false;
        $respuesta=readline($paramMensaje);

        if ($respuesta=="s" || $respuesta=="S") {
            $continuar=true; // Código a ejecutar si respuesta es "s" o "S"
        }
        return $continuar;
    }

    function pedirCuantosDados($paramMensaje){
        $cuantosDados=readline($paramMensaje);
        if (!is_numeric($cuantosDados) || ($cuantosDados<1||$cuantosDados>5)) {
            do {
                $cuantosDados=readline("No has tecleado un número positivo entre 1 y 5. Vuelve a intentarlo: ");
            } while (!is_numeric($cuantosDados) || ($cuantosDados<1||$cuantosDados>5));
        }
        return $cuantosDados;
    }

    function crearDados($paramCuantosDados){
        $arrayDados = [];
        foreach (range(1, $paramCuantosDados) as $i) {
            $arrayDados["dado$i"] = new PokerDice();
        }
        return $arrayDados;
    }

    function tirarDados(&$paramArrayDados) { // Pasamos el arrayDados por referencia (&)
        foreach ($paramArrayDados as $key => $dado) {
            $paramArrayDados[$key]->setShapeName($dado->throw());
        }
        PokerDice::setTotalThrows();
        return PokerDice::getTotalThrows()*count($paramArrayDados);
        /* Al pasar el array por referencia, la modificación en ese array que se hace dentro de este método (asignar figuras a cada cara), se reflejan 
           en el array sin necesidad de hacer return */
    }

    function imprimirTirada($paramArrayDados, $paramTiradas){
        echo "Resultado de la última tirada de dados:\n";
        foreach ($paramArrayDados as $nombreDado => $dado) {
            $figura = $dado->getShapeName();
            echo "$nombreDado => $figura\n";
        }
        echo "Llevas lanzados un total de " . $paramTiradas . " dados\n";
    }

    function jugar(){
        $cuantosDados = pedirCuantosDados("¿Con cuántos dados quieres jugar (1/5): ?\n");
        $arrayDados = crearDados($cuantosDados);
        do {
            $tiradas=tirarDados($arrayDados);
            imprimirTirada($arrayDados, $tiradas);
            $continuar = sioNo("¿Quieres volver a tirar los dados (s/n): ?\n");
        } while ($continuar);
        echo "Hasta pronto!!";
    }

?>