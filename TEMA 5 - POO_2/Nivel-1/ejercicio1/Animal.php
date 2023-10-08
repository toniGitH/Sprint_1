<?php 

    abstract class Animal{

        private $nombreAnimal;

        function __construct($paramNombreAnimal){
            $this->nombreAnimal=$paramNombreAnimal;
        }

        function getNombreAnimal(){
            return $this->nombreAnimal;
        }

        // Declaramos un método llamado makeSound() como "abstract".
        // El cuerpo de este método se define en cada una de las clases que heredan de esta clase padre (Animal)

        abstract function makeSound();
    }

?>