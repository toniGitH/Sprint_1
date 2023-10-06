<?php 

    // DEFINIMOS LA CLASE CINE
    class Cine{

        // ATRIBUTOS:
        private $nombreCine;
        private $poblacionCine;
        private $cartelera; // Este array guarda, del total de películas existentes, aquellas que se proyectan en un cine concreto
                            // Es un array de objetos de tipo Pelicula

        // CONSTRUCTOR:
        function __construct($nombreCine, $poblacionCine){
            $this->nombreCine=$nombreCine;
            $this->poblacionCine=$poblacionCine;
            $this->cartelera=[];
        }

        // MÉTODOS SETTERS:
        function setNombreCine($nombreCine){
            $this->nombreCine=$nombreCine;
        }
        function setPoblacionCine($poblacionCine){
            $this->poblacionCine=$poblacionCine;
        }

        // MÉTODOS GETTERS:
        function getNombreCine(){
            return $this->nombreCine;
        }
        function getPoblacionCine(){
            return $this->poblacionCine;
        }

        function getCartelera(){
            return $this->cartelera;
        }

        // RESTO DE MÉTODOS:
        function incluirPeliculaEnCartelera($pelicula){ // $pelicula es un objeto de tipo Pelicula
            $this->cartelera[]=$pelicula; 
        }
        function verPeliculaDeCartelera($paramIndicePelicula){ // No sé si al final necesitaré este método
            return $this->cartelera[$paramIndicePelicula];
        }

    }

?>