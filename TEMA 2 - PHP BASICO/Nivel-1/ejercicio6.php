<?php 

    // FUNCIÓN SOLICITADA:
    function isBitten(){
        $aleatorio = rand(0,1);
        if ($aleatorio == 0) {
            $valor="FALSE";
        }
        else{
            $valor="TRUE";
        }
        return $valor;
    }

    // COMPROBACIÓN:
    for ($i=0; $i < 11; $i++) { 
        echo isBitten() . "\n";
    }

?>