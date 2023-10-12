<?php 

    require_once "tipoCombustible.php";
    require_once "Turbo.php";

    class Car{

        use Turbo;

        // Propiedades:
        private string $marca;
        private string $matricula;
        private tipoCombustible $combustible;
        private int $maxSpeed;

        // Constructor:
        public function __construct(string $paramMarca, string $paramMatricula, tipoCombustible $paramCombustible, int $paramMaxSpeed){
            $this->marca = $paramMarca;
            $this->matricula = $paramMatricula;
            $this->combustible = $paramCombustible;
            $this->maxSpeed = $paramMaxSpeed;
        }

        // Métodos getters:

        function getMarca(): string{
            return $this->marca;
        }
        function getMatricula(): string{
            return $this->matricula;
        }
            function getCombustible(): tipoCombustible{
            return $this->combustible;
        }
        function getMaxSpeed(): int{
            return $this->maxSpeed;
        }

    }

?>