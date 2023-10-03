<?php

/* ENUNCIADO: 
   Crea una clase Employee, define como atributos su nombre y sueldo.
   Define un método initialize que reciba como parámetros el nombre y sueldo.
   Plantea un segundo método print que imprima el nombre y un mensaje si debe pagar o no impuestos (si el sueldo supera 6000,
   paga impuestos).
*/

/* ARGUMENTOS PARA JUSTIFICAR LA SOLUCIÓN ALTERNATIVA PARA RESOLVER ESTE EJERCICIO: 
   He partido de la base de no crear un constructor, porque el enunciado no lo pide. Esto supone que se aplicará un constructor por
   defecto. Al instanciar los objetos con este constructor, los valores asignados a sus propiedades serán NULL, por lo que hay que
   hacer algo para que las propiedades de los objetos tomen el valor que nosotros queramos.
   Para ello, utilizo la función initialize, que recibirá dos parámetros, que serán los valores que les queramos asignar a las dos
   propiedades del objeto. Esta función asignará dichos valores a las dos propiedades de nuestros objetos.
   El método print no necesita aclaración, salvo que si se aplica a un objeto sobre el que no se ha aplicado previamente el método
   initialize, no funcionará como queremos.
   NOTA: en mi editor VSC, me marca un error en las dos líneas en las que se instancian los objetos $empleado1 y $empleado2, pero no
   impide la ejecución del código, que se ejecuta correctamente y devuelve los resultados que se esperan en ambos casos.
*/

    class Employee{

        public $nombre;
        public $salario;

        function initialize($paramNombre, $paramSalario) {
        $this->nombre = $paramNombre;
        $this->salario = $paramSalario;
        }

        /* Definimos la función print, a la que no se le pasan parámetros, porque en este caso, no los necesita, dado que sólo
           va a "trabajar" con las propiedades $nombre y $salario, y a dichas propiedades ya tiene acceso por estar este método dentro
           de la clase Employee
        */
        function print(){
            if ($this->salario>6000) {
                echo $this->nombre . " tiene que pagar impuestos.\n";
            }
            else{
                echo $this->nombre . " no tiene que pagar impuestos.\n";
            }
        }
    }

    // Comprobación: 
    
    // Objeto $empleado1 => se instancia con un constructor vacío, por lo que sus propiedades toman el valor de NULL, y como no
    // hemos llamado al método initialize, al llamar al método print, éste actúa sobre un objeto con propiedades con valor NULL y
    // da un resultado inútil:
    $empleado1 = new Employee(); // Mi editor marca error aquí, pero el código se ejecuta correctamente
    //var_dump($empleado1); // Sólo para verificar las propiedades del objeto $empleado1
    $empleado1->print();

    // Objeto $empleado2 => se instancia con un constructor vacío, por lo que sus propiedades toman el valor de NULL, pero como ahora
    // sí hemos llamado al método initialize, la salida del método print sí nos da un resultado útil:
    $empleado2 = new Employee(); // Mi editor marca error aquí, pero el código se ejecuta correctamente
    //var_dump($empleado2); // Sólo para verificar las propiedades del objeto $empleado2
    $empleado2->initialize("Juan", 15000);
    $empleado2 -> print();

?>