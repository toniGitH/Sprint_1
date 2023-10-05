<?php 

    abstract class Shape{ // Clase abstracta. No se pueden instanciar objetos de esta clase

        protected $alto;
        protected $ancho;

        function __construct($paramAlto, $paramAncho){ // Constructor
            $this->alto = $paramAlto;
            $this->ancho = $paramAncho;
        }

        abstract function area(); // Esta declaración OBLIGARÁ a crear y definir un método area() en todas y cada una de las
                                  // clases que hereden de la clase Shape.
    }

?>