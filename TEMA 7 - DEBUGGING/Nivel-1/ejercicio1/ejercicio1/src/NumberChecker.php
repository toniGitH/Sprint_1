<?php

    namespace App; // Vamos a "colocar" tanto la clase a probar como la clase que contiene las pruebas dentro del namespace APP
                   // Esto es aconsejable, aunque no obligatorio, porque facilita y aclara la organización del código de pruebas
    class NumberChecker  {

        public function __construct(private int $number){}

        public function isEven(): bool {
            return $this->number%2 == 0;
        }
        public function isPositive(): bool {
            return $this->number > 0;
        }
    }
    
?>