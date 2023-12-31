<?php 

    require_once "interfaceArea.php";

    class Circulo implements CalcularArea{ // Esta clase NO hereda de la clase Shape

        protected $radio;

        function __construct($paramRadio){
            $this->radio=$paramRadio;
        }

        function area(){ // Función obligatoria por implementar la interface CalcularArea
            return (pow($this->radio, 2))*pi(); // Aquí no necesito usar getters porque aunque la propiedad radio está definida
                                                // como protected, dentro de la propia clase sí tengo acceso a ella directamente
        }

    }


?>