<?php 

    abstract class Animal{

        private $nombreAnimal;
        private $tipoAnimal;

        function __construct($paramNombreAnimal, $paramTipoAnimal){
            $this->nombreAnimal=$paramNombreAnimal;
            $this->tipoAnimal=$paramTipoAnimal;
        }

        function getNombreAnimal(){
            return $this->nombreAnimal;
        }

        function getTipoAnimal(){
            return $this->tipoAnimal;
        }

        // Declaramos un método llamado makeSound() como "abstract".
        // El cuerpo de este método se define en cada una de las clases que heredan de esta clase padre (Animal)

        abstract function makeSound();
    }

?>