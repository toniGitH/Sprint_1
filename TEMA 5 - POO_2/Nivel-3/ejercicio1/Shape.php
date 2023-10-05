<?php 

    class Shape{

        // PROPIEDADES:
        protected $tipoFigura;
        protected $alto;
        protected $ancho;

        // CONSTRUCTOR
        function __construct($paramAlto, $paramAncho){
            $this->alto=$paramAlto;
            $this->ancho=$paramAncho;
        }

        // MÉTODOS GETTERS (en principio, no necesitaré los getters de alto y ancho)
        function getTipoFigura(){ // Necesitaré este método si quiero obtener el valor de esta propiedad desde fuera de la clase Shape o Rectanculo
            return $this->tipoFigura;
        }

    }

?>