<?php

    $nombrePersona=$_POST["nombre"];
    if (!isset($_POST["nombre"]) || $_POST["nombre"]=="") {
        $nombrePersona="INVITADO";
    }
    $usuario=$_POST["usuario"];
    if (!isset($_POST["usuario"]) || $_POST["usuario"]=="") {
        $usuario="USUARIO INVITADO";
    }
    
    echo "Tu nombre es $nombrePersona y tu usuario es $usuario";

?>