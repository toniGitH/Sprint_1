<?php

    include "funciones.php"; // Importamos el archivo que contiene todas las funciones que necesitaremos

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

    // DECLARAMOS LAS VARIABLES QUE VAMOS A NECESITAR:
    $todosLosCines=[]; // Vamos a necesitar este array para guardar aquí TODOS los objetos de tipo Cine que vayamos creando
    $todasLasPelis=[]; // Vamos a necesitar este array para guardar aquí TODOS los objetos de tipo Pelicula que vayamos creando

    menuPrincipal($todosLosCines, $todasLasPelis);

?>