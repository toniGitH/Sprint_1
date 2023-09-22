<?php 

    // Declaración de las variables X e Y (de tipo int) y las variables N y M (de tipo double):

    $X=3;
    $Y=5;
    $N=7.8;
    $M=4.5;

    // Operaciones para las variables X e Y:

    echo "X = $X <br>";
    echo "Y = $Y <br>";
    echo "X + Y = " . $X + $Y . "<br>";
    echo "X - Y = " . $X - $Y . "<br>";
    echo "X * Y = " . $X * $Y . "<br>";
    echo "X % Y = " . $X % $Y . "<br>";
    echo "<hr>";

    // Operaciones para las variables N y M:

    echo "N = $N <br>";
    echo "M = $M <br>";
    echo "N + M = " . $N + $M . "<br>";
    echo "N - M = " . $N - $M . "<br>";
    echo "N * M = " . $N * $M . "<br>";
    echo "N % M = " . $N % $M . "<br>";
    echo "<hr>";

    // Operaciones para las variables X,Y,N y M:

    echo "El doble de la variable X es " . 2*$X . "<br>";
    echo "El doble de la variable Y es " . 2*$Y . "<br>";
    echo "El doble de la variable N es " . 2*$N . "<br>";
    echo "El doble de la variable M es " . 2*$M . "<br>";
    echo "X + Y + N + M = " . $X+$Y+$N+$M . "<br>";
    echo "X * Y * N * M = " . $X*$Y*$N*$M . "<br>";

    // Función Calculadora:

    function calc($num1, $num2, $operacion){

        switch ($operacion) {
            case "+":
                $resultado = $num1+$num2; 
                break;
            case "-":
                $resultado = $num1-$num2; 
                break;
            case '*':
                $resultado = $num1*$num2; 
                break;
            case '/':
                $resultado = $num1/$num2; 
                break;
            default:
                $resultado = "Operación no permitida";
        }
        return $resultado;
    }

    /* la función calc solo hace los calculos con los parámetros recibidos y devuelve el valor de la respectiva operación.
       NO VALIDA si los datos recibidos por parámetros son válidos, puesto que ésto lo debería hacer otra función diferente.
       Igualmente, el resultado devuelto es solamente el valor numérico, sin texto adicional (como por ejemplo, "El resultado 
       de la suma es...). De esta forma, la función es más "genérica" y el valor que devuelve es más "aprovechable" para usarlo
       como parámetro en otros cálculos en otras funciones. */

?>