<?php 

/* Voy a utilizar en este ejercicio los métodos mágicos:  __set(), __get(), __toString()*/

/* Para ello, creo la clase Magico, con 3 propiedades que voy a declarar como PRIVADAS, de forma que no se podría acceder a ellas 
   desde fuera de la clase, a no ser que tuviera sus correspondientes métodos setters y getters.
   Sin embargo, gracias a los métodos mágicos __set() y __get(), no sólo puedo acceder desde fuera, sino que además, con un solo
   método puedo "manejar" todas las propiedades de la clase Magico.
   Por otro lado, utilizaré el método mágico toString() para "gestinar" la situación en la que se intente tratar como a un string.
*/ 

    class Magico{

        // Propiedades:
        private $nombre;
        private $apellido1;
        private $apellido2;

        // Constructor:
        function __construct($paramNom, $paramApe1, $paramApe2){
            $this->nombre=$paramNom;
            $this->apellido1=$paramApe1;
            $this->apellido2=$paramApe2;
        }

        // No declaro getters ni setters

        // Método mágico __set():
        // (gracias a este método, podré "setear" las 3 propiedades de la clase desde fuera de ella y sin utilizar métodos setters)
        public function __set($paramPropiedad, $paramValor){
            if (property_exists($this, $paramPropiedad)) {
                echo "AVISO: Estás seteando la propiedad PRIVADA " . $paramPropiedad . " sin usar un método setter\n";
                $this->$paramPropiedad = $paramValor;
            }
            else {
                echo "La propiedad " . $paramPropiedad . " a la que intentas acceder no existe\n";
            }
        }

        // Método mágico __get():
        // (gracias a este método, podré obtener el valor de las 3 propiedades de la clase desde fuera de ella y sin utilizar getters)
        public function __get($paramPropiedad){
            if (property_exists($this, $paramPropiedad)) {
                echo "AVISO: Estás accediento a la propiedad PRIVADA " . $paramPropiedad . " sin usar un método getter\n";
                echo "El valor de la propiedad " . $paramPropiedad . " es " . $this->$paramPropiedad . "\n";
            }
            else {
                echo "La propiedad " . $paramPropiedad . " a la que intentas acceder no existe\n";
            }
        }

        // Método mágico __toString():
        public function __toString(){
                return "Soy un objeto de la clase Magico y me llamo $this->nombre $this->apellido1 $this->apellido2";
                // Alternativa:
                // return "No puedes acceder a un objeto utilizando la instrucción echo";
        }

    } // Final de la clase Magico

    $objeto1=new Magico("Antonio", "González", "Ariza");
    $objeto1->nombre="Pedro"; // Esto daría un error si no hubiera definido el método __set() dentro de la clase Magico
    $objeto1->apellido1="Martinez"; // Esto daría un error si no hubiera definido el método __set() dentro de la clase Magico
    $objeto1->nombre; // Esto daría un error si no hubiera definido el método __get() dentro de la clase Magico

    echo $objeto1; // Esto daría un error si no hubiera definido el método __toString() dentro de la clase Magico

?>