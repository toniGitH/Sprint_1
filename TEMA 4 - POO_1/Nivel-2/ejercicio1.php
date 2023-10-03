<?php 

    /* ENUNCIADO: 
        Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
        Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le
        aplica el método.
        Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
        Realiza una aplicación que permita echar cinco dados de póquer a la vez.
        Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.
    */

    class PokerDice{

        private $caraVisible="";
        private static $totalLanzamientos=0; 

        /* MÉTODO CONSTRUCTOR:
          En principio, en esta situación, no necesitamos definir un constructor, porque todos los objetos de la clase PokerDice se
          instanciarán siempre tomando esos valores. A lo largo del programa pueden cambiar, pero de inicio, siempre tomarán esos
          valores*/

        // MÉTODOS SETTERS:
        function setCaraVisible($paramFigura){
            $this->caraVisible=$paramFigura;
        }

        static function setTotalThrows(){
            self::$totalLanzamientos++;
        }

        // MÉTODOS GETTERS:
        function getCaraVisible(){
            return $this->caraVisible;
        }

        static function getTotalThrows(){
            return self::$totalLanzamientos;
        }
        
        // Resto de métodos:

        function throw(){
            return random_int(1,6);
        }

        function shapeName($paramAleatorio){
            switch ($paramAleatorio) {
                case 1:
                    $figura="As";
                    break;
                case 2:
                    $figura="K";
                    break;
                case 3:
                    $figura="Q";
                    break;
                case 4:
                    $figura="J";
                    break;
                case 5:
                    $figura="8";
                    break;
                case 6:
                    $figura="7";
                    break;
            }
            return $figura;
        }

    } // Fin de la clase PokerDice

    // Definimos las funciones que vamos a utilizar, además de la clase PokerDice:

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

    function tirarDados($paramArrayDados) {
        foreach ($paramArrayDados as $key => $dado) {
            $paramArrayDados[$key]->setCaraVisible($dado->shapeName($dado->throw()));
        }
        
        return $paramArrayDados;
    }

    function contabilizarTiradas($paramArrayDados){
        PokerDice::setTotalThrows();
        return PokerDice::getTotalThrows()*count($paramArrayDados);
    }

    function imprimirTirada($paramArrayDados, $paramTiradas){
        echo "Resultado de la última tirada de dados:\n";
        foreach ($paramArrayDados as $nombreDado => $dado) {
            $figura = $dado->getCaraVisible();
            echo "$nombreDado => $figura\n";
        }
        echo "Llevas lanzados un total de " . $paramTiradas . " dados\n";
    }

    function jugar(){
        $cuantosDados = pedirCuantosDados("¿Con cuántos dados quieres jugar (1/5): ?\n");
        $arrayDados = crearDados($cuantosDados);
        do {
            $arrayTirada=tirarDados($arrayDados);
            $tiradas=contabilizarTiradas($arrayTirada);
            imprimirTirada($arrayDados, $tiradas);
            $continuar = sioNo("¿Quieres volver a tirar los dados (s/n): ?\n");
        } while ($continuar);
        echo "Hasta pronto!!";
    }

    // Para poner en marcha el programa, llamamos a la función jugar():

    jugar();
 
?>