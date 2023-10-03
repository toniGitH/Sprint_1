<?php 

// FUNCIONES PARA IMPLEMENTAR/GESTIONAR EL MENÚ PRINCIPAL

    function menuPrincipal($todosLosCines, $todasLasPelis){
        $continuar=true;
        do {
            imprimirMenuPrincipal();
            $opcionMenu=gestionarOpcionesMenu($todosLosCines, $todasLasPelis);
            if ($opcionMenu==0) {
                $continuar=false;
            } 
            else{
                $otraOperacion=sioNo("¿Deseas hacer otra operación (s/n)?: ");
                if ($otraOperacion==false) {
                    $continuar=false;
                    echo "Hasta pronto!! \n";
                }
            }
        } while ($continuar!=false);
    }

    function imprimirMenuPrincipal(){
        echo "\nAPLICACIÓN CINES\n";
        echo "----------------\n";
        echo "MENÚ PRINCIPAL\n";
        echo "1) DAR DE ALTA UN CINE\n";
        echo "2) DAR DE ALTA UNA PELÍCULA\n";
        echo "3) AÑADIR UNA PELÍCULA A UNA CARTELERA DE UN CINE\n";
        echo "4) CONSULTAR TODA LA CARTELERA DE UN CINE\n";
        echo "5) CONSULTAR LA PELÍCULA MÁS LARGA DE UNA CARTELERA DE UN CINE\n";
        echo "6) BUSCAR PELÍCULAS DE UN/A DIRECTOR/A EN UNA CARTELERA DE UN CINE\n";
        echo "0) SALIR DE LA APLICACIÓN\n";
        echo "\n";
    
    }

    function gestionarOpcionesMenu(&$todosLosCines, &$todasLasPelis){ // Pasamos los arrays por rerefencia
        $opcionMenu = pedirOpcionMenu("SELECCIONA UNA OPCIÓN: \n");
        switch ($opcionMenu) {
            case 1:
                $todosLosCines = crearCine($todosLosCines);
                break;
            case 2:
                $todasLasPelis= crearPelicula($todasLasPelis);
                break;
            case 3:
                asignarPeliculaACartelera($todosLosCines, $todasLasPelis);
                break;
            case 4:
                imprimirCartelera($todosLosCines);
                break;
            case 5:
                buscarPeliMasLarga($todosLosCines);
                break;
            case 6:
                buscarPelisPorDirector($todosLosCines);
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
    
// ACCIONES DEL MENU PRINCIPAL

    function crearCine($paramArrayCines){
        do {
            $nombreCine=pedirString("Escribe el nombre del CINE a dar de alta: \n");
            if (!existeCine($nombreCine, $paramArrayCines)) {
                $poblacion=pedirString("Escribe la poblacion del CINE a dar de alta: \n");
                $cine = new Cine($nombreCine, $poblacion);
                $paramArrayCines[]=$cine;
                $continuar=false;
                echo "El cine " . strtoupper($nombreCine) . " se ha dado de alta en la aplicación correctamente!!\n";
            }
            else{
                echo "El cine " . strtoupper($nombreCine) . " ya existe en la aplicación. No puedes volver a darlo de alta\n";
                $continuar=sioNo("¿Quieres dar de alta otro CINE (s/n)?: \n");
            }
        } while ($continuar);
        return $paramArrayCines;
    }

    function crearPelicula($paramArrayPeliculas){
        do {
            $nombrePelicula=pedirString("Escribe el nombre de la PELÍCULA a dar de alta: \n");
            if (!existePelicula($nombrePelicula, $paramArrayPeliculas)) {
                $director=pedirString("Escribe el nombre del DIRECTOR/A de la película a dar de alta: \n");
                $duracion=pedirNumero("Indica la DURACIÓN (en minutos) de la película a dar de alta: \n");
                $pelicula = new Pelicula($nombrePelicula, $director, $duracion);
                $paramArrayPeliculas[]=$pelicula;
                $continuar=false;
                echo "La película " . strtoupper($nombrePelicula) . " se ha dado de alta en la aplicación correctamente!!\n";
            }
            else{
                echo "La película " . strtoupper($nombrePelicula) . " ya existe en la aplicación. No puedes volver a darla de alta.\n";
                $continuar=sioNo("¿Quieres dar de alta otra PELÍCULA (s/n)?: \n");
            }
        } while ($continuar);
        return $paramArrayPeliculas;
    }

    function asignarPeliculaACartelera($paramArrayCines, $paramArrayPeliculas){
        do {
            $nombrePelicula=pedirString("Escribe el nombre de la PELÍCULA que quieres asignar a una cartelera de un cine: \n");
            if (existePelicula($nombrePelicula, $paramArrayPeliculas)) {
                $indicePelicula=buscarIndicePeliculaEnArray($nombrePelicula, $paramArrayPeliculas);
                do {
                    $nombreCine=pedirString("Escribe el nombre del CINE a cuya cartelera quieras añadir la película: \n");
                    if (existeCine($nombreCine, $paramArrayCines)) {
                        $indiceCine=buscarIndiceCineEnArray($nombreCine, $paramArrayCines);
                        if (!existePeliculaEnCartelera($nombrePelicula, $paramArrayCines[$indiceCine]->getCartelera())) {
                            $paramArrayCines[$indiceCine]->incluirPeliculaEnCartelera($paramArrayPeliculas[$indicePelicula]);
                            echo "La película " . strtoupper($nombrePelicula) . " se ha dado de alta en la cartelera del cine " . strtoupper($nombreCine) . " correctamente!!\n";
                        }
                        else{
                            echo "La película " . strtoupper($nombrePelicula) . " ya consta en la cartelera del cine " . strtoupper($nombreCine) . ".\n";
                        }
                        $continuar=false;
                    }
                    else{
                        echo "El cine " . strtoupper($nombreCine) . " aún no está dado de alta en la aplicación. No puedes asignar una película a un cine que aún no esté dado de alta.\n";
                        $continuar=sioNo("¿Quieres intentarlo con otro CINE (s/n)?: \n");
                    }
                } while ($continuar);
                $continuar=false;
            }
            else{
                echo "La película " . strtoupper($nombrePelicula) . " aún no existe en la aplicación. No puedes asignarla a ninguna cartelera.\n";
                $continuar=sioNo("¿Quieres intentarlo con otra PELÍCULA (s/n)?: \n");
            }
        } while ($continuar);
    }

    function imprimirCartelera($paramArrayCines){
        $continuar=true;
        do {
            $nombreCine=pedirString("Escribe el nombre del CINE cuya cartelera quieras ver: \n");
            if (existeCine($nombreCine, $paramArrayCines)) {
                $indiceCine=buscarIndiceCineEnArray($nombreCine, $paramArrayCines);
                if (count($paramArrayCines[$indiceCine]->getCartelera())<1) {
                    echo "El cine " . strtoupper($paramArrayCines[$indiceCine]->getNombreCine()) . " aún no tiene ninguna película en su cartelara\n";
                }
                else{
                    echo "CARTELERA CINE: " . strtoupper(($paramArrayCines[$indiceCine])->getNombreCine()) . "\n";
                    foreach ($paramArrayCines[$indiceCine]->getCartelera() as $pelicula) {
                        echo "-----------------------------------------------\n";
                        echo "TÍTULO: " . strtoupper($pelicula->getnombrePelicula()) . "\n";
                        echo "DIRECTOR/A: " . strtoupper($pelicula->getDirectorPelicula()) . "\n";
                        echo "DURACIÓN: " . $pelicula->getDuracionPelicula() . " minutos\n";
                    }
                }
                $continuar=false;  
            }
            else{
                echo "Aún no tenemos el cine " . strtoupper($nombreCine) . " dado de alta en nuestra aplicación.\n";
                $continuar=sioNo("¿Quieres probar con otro CINE (s/n)?: \n");
            }
        } while ($continuar!=false);

    }

    function buscarPeliMasLarga($paramArrayCines){
        $continuar=true;
            do {
                $nombreCine=pedirString("Escribe el nombre de un CINE para buscar la pelicula más larga de su cartelera: \n");
                if (existeCine($nombreCine, $paramArrayCines)) {
                    $indiceCine=buscarIndiceCineEnArray($nombreCine, $paramArrayCines);
                    if (count($paramArrayCines[$indiceCine]->getCartelera())<1) {
                        echo "El cine " . strtoupper($paramArrayCines[$indiceCine]->getNombreCine()) . " aún no tiene ninguna película en su cartelera.\n";
                    }
                    else{
                        $indiceMasLarga=-1;
                        $duracionMasLarga=0;
                        foreach ($paramArrayCines[$indiceCine]->getCartelera() as $indice => $pelicula) {
                            if ($pelicula->getDuracionPelicula()>$duracionMasLarga) {
                                $duracionMasLarga=$pelicula->getDuracionPelicula();
                                $indiceMasLarga=$indice;
                            }
                        }
                        echo "La pelicula más larga que se proyecta actualmente en el cine " . strtoupper($nombreCine) . " es " . strtoupper(($paramArrayCines[$indiceCine]->getCartelera())[$indiceMasLarga]->getnombrePelicula()) . " y dura " . ($paramArrayCines[$indiceCine]->getCartelera())[$indiceMasLarga]->getDuracionPelicula() . " minutos.\n";
                        $continuar=false;
                    }
                    $continuar=false;  
                }
                else{
                    echo "Aún no tenemos el cine " . strtoupper($nombreCine) . " dado de alta en nuestra aplicación.\n";
                    $continuar=sioNo("¿Quieres probar con otro CINE (s/n)?: \n");
                }
            } while ($continuar!=false);
    }

    function buscarPelisPorDirector($paramArrayCines){
        $arrayPelisDeDirector=[];
        $continuar=true;
        do {
            $nombreCine=pedirString("Escribe el nombre de un CINE para buscar directoras/es: \n");
            if (existeCine($nombreCine, $paramArrayCines)) {
                $indiceCine=buscarIndiceCineEnArray($nombreCine, $paramArrayCines);
                if (count($paramArrayCines[$indiceCine]->getCartelera())<1) {
                    echo "El cine " . strtoupper($paramArrayCines[$indiceCine]->getNombreCine()) . " aún no tiene ninguna película en su cartelara.\n";
                }
                else{
                    $directorBuscado=pedirString("Escribe el nombre del DIRECTOR/A que buscas: ");
                    $arrayPelisDeDirector=[];
                    foreach ($paramArrayCines[$indiceCine]->getCartelera() as $pelicula) {
                        if (strtolower($pelicula->getDirectorPelicula()) == strtolower($directorBuscado)) {
                            $arrayPelisDeDirector[] = $pelicula->getNombrePelicula();
                        }
                    }
                    if (count($arrayPelisDeDirector)<1) {
                        echo "En la cartelera del cine " . strtoupper($nombreCine) . " no hay ninguna película de " . strtoupper($directorBuscado) . ".\n";
                    }
                    else{
                        echo "Las películas de " . strtoupper($directorBuscado) . " que se proyectan actualmente en el cine " . strtoupper($nombreCine) . " son:\n";
                        for ($i=0; $i<count($arrayPelisDeDirector) ; $i++) { 
                            echo strtoupper($arrayPelisDeDirector[$i]) . "\n";
                        }
                    }
                    $continuar=false;
                }
                $continuar=false;  
            }
            else{
                echo "Aún no tenemos el cine " . strtoupper($nombreCine) . " dado de alta en nuestra aplicación.\n";
                $continuar=sioNo("¿Quieres probar con otro CINE (s/n)?: \n");
            }
        } while ($continuar!=false);
    }

// FUNCIONES PARA BUSCAR ÍNDICE DE UN ELEMENTO EN UN ARRAY

    function buscarIndicePeliculaEnArray($paramNombrePelicula, $paramArrayPeliculas){
        $indicePeliculaBuscada=-1;
        if (count($paramArrayPeliculas)>0) {
            $contadorPelicula=0;
            do {
                if (strtolower($paramNombrePelicula) == strtolower($paramArrayPeliculas[$contadorPelicula]->getNombrePelicula())) {
                    $indicePeliculaBuscada = $contadorPelicula;
                }
                else {
                    $contadorPelicula++;
                }
            } while ($indicePeliculaBuscada<0 && $contadorPelicula<count($paramArrayPeliculas));
        } 
        return $indicePeliculaBuscada;
    }

    function buscarIndiceCineEnArray($paramNombreCine, $paramArrayCines){
        $indiceCineBuscado=-1;
        if (count($paramArrayCines)>0) {
            $contadorCine=0;
            do {
                if (strtolower($paramNombreCine) == strtolower($paramArrayCines[$contadorCine]->getNombreCine())) {
                    $indiceCineBuscado = $contadorCine;
                }
                else {
                    $contadorCine++;
                }
            } while ($indiceCineBuscado<0 && $contadorCine<count($paramArrayCines));
        } 
        return $indiceCineBuscado;
    }

// FUNCIONES EXISTE O NO EXISTE

    function existeCine($paramNombreCine, $paramArrayCines){
        $existe=false;
        if (buscarIndiceCineEnArray($paramNombreCine, $paramArrayCines)>=0) {
            $existe=true;
        }
        return $existe;
    }

    function existePelicula($paramNombrePelicula, $paramArrayPeliculas){
        $existe=false;
        if (buscarIndicePeliculaEnArray($paramNombrePelicula, $paramArrayPeliculas)>=0) {
            $existe=true;
        }
        return $existe;
    }

    function existePeliculaEnCartelera($paramNombrePelicula, $paramArrayCartelera){
        $existe=false;
        if (buscarIndicePeliculaEnArray($paramNombrePelicula, $paramArrayCartelera)>=0) {
            $existe=true;
        }
        return $existe;
    }

// FUNCIONES DE PETICION DE DATOS

    function pedirString($paramMensaje){
        return readline($paramMensaje);
    }

    function pedirNumero($paramMensaje){
        $numero=readline($paramMensaje);
        if (!is_numeric($numero) || $numero<1) {
            do {
                $numero=readline("No has tecleado un número positivo. Escribe un número entero positivo: ");
            } while (!is_numeric($numero) || $numero<1);
        }
        return $numero;
    }

    function pedirOpcionMenu($paramMensaje){
        $opcion=readline($paramMensaje);
        $repetir=false;
        do {
            if (!is_numeric($opcion) || ($opcion<0 || $opcion>6)) {
                $opcion=readline("No has tecleado una opción correcta. Inténtado de nuevo: ");
                $repetir=true;
            }
            else{
                $repetir=false;
            }
        } while ($repetir==true);
        return $opcion;
    }

    function sioNo($paramMensaje){
        $continuar=false;
        $respuesta=readline($paramMensaje);
        if ($respuesta=="s" || $respuesta=="S") {
            $continuar=true;
        }
        return $continuar;
    }

?>