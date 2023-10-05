<?php 

    class Triangulo extends Shape{

        // Hereda las propiedades de la clase Shape
        // Hereda el constructor de la clase Shape

        function area(){ // Función obligatoria por heredar de una clase abstracta que tiene este método definido en ella como abstract
            return (($this->ancho)*($this->alto))/2; 
        }
    }

?>