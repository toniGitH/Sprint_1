<?php 

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


    $nota = readline("Introduce la nota (del 0 al 10)");

    if (esNumeroValido($nota)) {
        echo "Tu grado es " . verificarGrado(calculaPorcentajeNota($nota));
    } else {
        echo "El número escrito no es válido";
    }

?>