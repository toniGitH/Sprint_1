<?php

/* ENUNCIADO: 
   Crea una clase Employee, define como atributos su nombre y sueldo.
   Define un método initialize que reciba como parámetros el nombre y sueldo.
   Plantea un segundo método print que imprima el nombre y un mensaje si debe pagar o no impuestos (si el sueldo supera 6000,
   paga impuestos).
*/

/* ARGUMENTOS PARA JUSTIFICAR LA SOLUCIÓN PARA RESOLVER ESTE EJERCICIO: 
   Aunque el enunciado no lo pide, he creado un constructor que asignará a las dos propiedades definidas en la clase los valores
   que le pasaremos por parámetros.
   En este caso, la función initialize se queda vacía, aunque no tiene mucho sentido una función que no hace nada, pero el enunciado
   tampoco especifica qué debe hacer esa función.
*/

    class Employee{

        public $nombre;
        public $salario;

        function __construct($nombre, $salario){
            $this->nombre = $nombre;
            $this->salario = $salario;
        }

        function initialize($paramNombre, $paramSalario) {}

        /* Definimos la función print, a la que no se le pasan parámetros, porque en este caso, no los necesita, dado que sólo
           va a "trabajar" con las propiedades $nombre y $salario, y a dichas propiedades ya tiene acceso por estar este método dentro
           de la clase Employee
        */
        function print(){
            if ($this->salario>6000) {
                echo $this->nombre . " tiene un sueldo de " . $this->salario . ", por lo que tiene que pagar impuestos.\n";
            }
            else{
                echo $this->nombre . " tiene un sueldo de " . $this->salario . ", por lo que no tiene que pagar impuestos.\n";

            }
        }
    }

    // Comprobación: 
    
    $empleado1 = new Employee("Juan", 4000);
    $empleado1->print();

    $empleado2 = new Employee("María", 15000);
    $empleado2 -> print();

?>