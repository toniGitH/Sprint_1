<?php 

    class PokerDice{

        private $shapeName="";
        private static $totalLanzamientos=0; 

        /* MÉTODO CONSTRUCTOR:
        En principio, en esta situación, no necesitamos definir un constructor, porque todos los objetos de la clase PokerDice se
        instanciarán siempre tomando esos valores. A lo largo del programa pueden cambiar, pero de inicio, siempre tomarán esos
        valores*/

        // MÉTODOS SETTERS:
        function setShapeName($paramAleatorio){
            switch ($paramAleatorio) {
                case 1:
                    $this->shapeName="As";
                    break;
                case 2:
                    $this->shapeName="K";
                    break;
                case 3:
                    $this->shapeName="Q";
                    break;
                case 4:
                    $this->shapeName="J";
                    break;
                case 5:
                    $this->shapeName="8";
                    break;
                case 6:
                    $this->shapeName="7";
                    break;
            }
        }

        static function setTotalThrows(){
            self::$totalLanzamientos++;
        }

        // MÉTODOS GETTERS:
        function getShapeName(){
            return $this->shapeName;
        }

        static function getTotalThrows(){
            return self::$totalLanzamientos;
        }
        
        // Resto de métodos:

        function throw(){
            return random_int(1,6);
        }

    } // Fin de la clase PokerDice

?>