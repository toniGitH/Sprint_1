<?php 

    // DEFINIMOS LA CLASE PELICULA
    class Pelicula{

        // ATRIBUTOS:
        private $nombrePelicula;
        private $directorPelicula;
        private $duracionPelicula;

        // CONSTRUCTOR:
        function __construct($nombrePelicula, $directorPelicula, $duracionPelicula){
            $this->nombrePelicula=$nombrePelicula;
            $this->directorPelicula=$directorPelicula;
            $this->duracionPelicula=$duracionPelicula;
        }

        // MÉTODOS SETTERS:
        function setNombrePelicula($nombrePelicula){ // No se usará, porque el constructor ya asignará valor a este atributo
            $this->nombrePelicula=$nombrePelicula;
        }
        function setDirectorPelicula($directorPelicula){ // No se usará, porque el constructor ya asignará valor a este atributo
            $this->directorPelicula=$directorPelicula;
        }
        function setDuracionPelicula($duracionPelicula){ // No se usará, porque el constructor ya asignará valor a este atributo
            $this->duracionPelicula=$duracionPelicula;
        }

        // MÉTODOS GETTERS:
        function getnombrePelicula(){
            return $this->nombrePelicula;
        }
        function getDirectorPelicula(){
            return $this->directorPelicula;
        }
        function getDuracionPelicula(){
            return $this->duracionPelicula;
        }
        
        // RESTO DE MÉTODOS:
        

        // AÚN NOS FALTAN VARIOS MÉTODOS (buscar en el índice del array las películas del CINE, etc...)


    }

?>