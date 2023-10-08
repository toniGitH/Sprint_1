<?php 

    class Shape{

        // PROPIEDADES:
        protected $alto;
        protected $ancho;

        // CONSTRUCTOR
        function __construct($paramAlto, $paramAncho){
            $this->alto=$paramAlto;
            $this->ancho=$paramAncho;
        }
    }

?>