<?php 

    require_once "Animal.php";
    require_once "Perro.php";
    require_once "Gato.php";

    // Instancia de la clase Perro:
    $perro1 = new Perro("Bobby", "perro");
    echo "Mi nombre es " . $perro1->getNombreAnimal() . ", soy un " .$perro1->getTipoAnimal() . " y hago " . $perro1->makeSound() . ".\n";
    
    // Instancia de la clase Gato
    $gato1 = new Gato("Garfield", "gato");
    echo "Mi nombre es " . $gato1->getNombreAnimal() . ", soy un " .$gato1->getTipoAnimal() . " y hago " . $gato1->makeSound() . ".\n";

    // IMPORTANTE:
    // $animal1 = new Animal("bicho"); // ESTO NO SE PUEDE HACER SI LA CLASE SE DECLARA COMO ABSTRACT
    /*
    Las clases abstractas se utilizan como plantillas o modelos para otras clases, y no se pueden crear instancias de ellas
    por sí mismas. Su propósito principal es proporcionar una estructura común y definir métodos que deben ser implementados
    por las clases derivadas (subclases).
    */

?>