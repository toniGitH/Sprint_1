<?php

/* NOTA: he pensado que tendía más sentido hacer que los métodos fueran estáticos, porque hacen referencia a "algo" que no está
       directamente relacionado con los objetos de manera individual, sino más bien compartido por todos ellos por igual, aunque
       no sé si es una interpretación acertada.
       Además, de esta manera, no tengo que instanciar ningún objeto para acceder a dichos métodos
*/

    class Magica{
        // No se definen propiedades
        // No se define el constructor

        public static function getFile(){
            return __FILE__;
        }

        public static function getDir(){
            return __DIR__;
        }

    } // Fin de la clase Magica

echo "La ruta completa donde se encuentra este archivo llamado Magica.php es: " . Magica::getFile() . "\n";
echo "\n";

echo "La ruta de la carpeta donde se encuentra este archivo llamado Magica.php es: " . Magica::getDir() . "\n";



?>