<?php 

    require_once "Animal.php";
    require_once "Perro.php";
    require_once "Gato.php";

    // Instancia de la clase Perro:
    $animal1 = new Perro("Bobby");
    echo "Mi nombre es " . $animal1->getNombreAnimal() . ", soy un " .strtolower(get_class($animal1)) . " y hago " . $animal1->makeSound() . ".\n";
    
    // Instancia de la clase Gato
    $animal2 = new Gato("Garfield");
    echo "Mi nombre es " . $animal2->getNombreAnimal() . ", soy un " .strtolower(get_class($animal2)) . " y hago " . $animal2->makeSound() . ".\n";

    // IMPORTANTE:
    // $animal3 = new Animal("bicho"); // ESTO NO SE PUEDE HACER SI LA CLASE SE DECLARA COMO ABSTRACT
    /*
    Las clases abstractas se utilizan como plantillas o modelos para otras clases, y no se pueden crear instancias de ellas
    por sí mismas. Su propósito principal es proporcionar una estructura común y definir métodos que deben ser implementados
    por las clases derivadas (subclases).
    */

?>