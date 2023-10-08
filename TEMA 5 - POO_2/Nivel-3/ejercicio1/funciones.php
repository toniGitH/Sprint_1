<?php 

    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || $numero<1) {
            do {
                $numero=readline("No has tecleado un número positivo. Escribe un número entero positivo: ");
            } while (!is_numeric($numero) || $numero<1);
        }
        return $numero;
    }

    function sioNo($paramMensaje){

        $respuesta=readline($paramMensaje);

        if ($respuesta=="s" || $respuesta=="S") {
            $continuar=true; // Código a ejecutar si respuesta es "s" o "S"
        }
        else{
            $continuar=false;// Código a ejecutar si respuesta no es "s" o "S"
        }
        return $continuar;
    }

    function pedirOpcionMenu($paramMensaje){
        $opcion=readline($paramMensaje);
        $repetir=false;
        do {
            if (!is_numeric($opcion) || ($opcion<0 || $opcion>3)) {
                $opcion=readline("No has tecleado una opción correcta. Inténtado de nuevo: \n");
                $repetir=true;
            }
            else{
                $repetir=false;
            }
        } while ($repetir==true);
        return $opcion;
    }

    function imprimirMenuPrincipal(){
        echo "\nAPLICACIÓN CALCULO DE ÁREAS\n";
        echo "----------------\n";
        echo "OPCIONES:\n";
        echo "1) RECTÁNGULO\n";
        echo "2) TRIÁNGULO\n";
        echo "3) CÍRCULO\n";
        echo "0) SALIR DE LA APLICACIÓN\n";
        echo "\n";

    }

    function gestionarOpcionesMenu(){
        $opcionMenu = pedirOpcionMenu("ESCOGE UNA FIGURA CUYO ÁREA QUIERAS CALCULAR: \n");
        switch ($opcionMenu) {
            case 1:
                echo "Has decidido calcular el área del RECTÁNGULO.\n";
                calcularAreaRectangulo();
                break;
            case 2:
                echo "Has decidido calcular el área del TRIÁNGULO.\n";
                calcularAreaTriangulo();
                break;
            case 3:
                echo "Has decidido calcular el área del CÍRCULO.\n";
                calcularAreaCirculo();
                break;
            case 0:
                echo "Hasta pronto!! \n";
                break;
            default:
                echo "Esa opción no existe";
                break;
        }
        return $opcionMenu;
    }

    function menuPrincipal(){ //Es la función que inicia el programa. Agrupa las 3 funciones anteriores más la de sioNo
        $continuar=true;
        do {
            imprimirMenuPrincipal();
            $opcionMenu=gestionarOpcionesMenu();
            if ($opcionMenu==0) {
                $continuar=false;
            } 
            else{
                $otraOperacion=sioNo("¿Deseas hacer otra operación (s/n)?: \n");
                if ($otraOperacion==false) {
                    $continuar=false;
                }
            }
        } while ($continuar!=false);
    }

    function calcularAreaRectangulo(){
        $figura = new Rectangulo(pedirNumero("Introduce el alto del rectángulo: \n"), pedirNumero("Introduce el ancho del rectángulo: \n"));
        echo "El área del " . strtolower(get_class($figura)) . " es " . $figura->area() . "\n";
    }

    function calcularAreaTriangulo(){
        $figura = new Triangulo(pedirNumero("Introduce la altura del triángulo: \n"), pedirNumero("Introduce la base del triángulo: \n"));
        echo "El área del " . strtolower(get_class($figura)) . " es " . $figura->area() . "\n";
    }

    function calcularAreaCirculo(){
        $figura = new Circulo(pedirNumero("Introduce el radio del círculo: \n"));
        echo "El área del " . strtolower(get_class($figura)) . " es " . $figura->area() . "\n";
    }

?>