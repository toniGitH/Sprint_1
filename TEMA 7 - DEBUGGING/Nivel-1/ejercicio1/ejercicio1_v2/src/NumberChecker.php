<?php

    // No definimos ningún namespace puesto que en el autoload hemos establecido como namespase el ""
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