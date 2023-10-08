<?php 

    require_once "interfaceArea.php";

    class Triangulo extends Shape implements CalcularArea{

        // Hereda las propiedades de la clase Shape
        // Hereda el constructor de la clase Shape

        function area(){ // Función obligatoria por implementar la interface CalcularArea
            return (($this->ancho)*($this->alto))/2; // Aquí no necesito usar getters porque aunque las propiedades ancho
                                                     // y alto son protected, dentro de la clase hija sí tengo acceso a ellas directamente
        }
    }

?>