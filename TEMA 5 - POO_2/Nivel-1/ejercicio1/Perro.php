<?php 

    class Perro extends Animal{

        // Hereda las propiedades de la clase Animal
        // Hereda el constructor de la clase Animal

        function makeSound(){ // Este método es OBLIGATORIO porque la clase padre tiene este método definido como "abstract"
            return "GUAU GUAU";
        }

    }

?>