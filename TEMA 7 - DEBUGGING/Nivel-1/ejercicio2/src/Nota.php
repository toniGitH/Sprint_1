<?php 

/* FASE VERDE: es la que se está implementando en este archivo llamado Nota.php 
*/

    function esNumeroValido($paramNumero){
        if (!is_numeric($paramNumero) || ($paramNumero<0||$paramNumero>10)) {
            $resultado=false;
        } else{
            $resultado=true;
        }
        return $resultado;
    }

    function calculaPorcentajeNota($paramValor){
        return $paramValor*10;
    }

    function verificarGrado($paramPorcentaje) {
        if ($paramPorcentaje<33) {
            $grado = "SUSPENDIDO";
        }
        else if($paramPorcentaje<45){
            $grado = "TERCERA DIVISION";

        }
        else if($paramPorcentaje<60){
            $grado = "SEGUNDA DIVISION";
        }
        else{
            $grado = "PRIMERA DIVISION";
        }
        return $grado;
    }

    

?>