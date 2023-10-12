<?php

session_start(); /* Debemos escribir esta declaración SIEMPRE ANTES DE QUE SE ESCRIBA CUALQUIER CÓDIGO HTML */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer sesion</title>
</head>

<body>

    <h1>RECUPERAR DATOS DE SESION</h1>

    <p>Bienvenido, <?php echo $_SESSION['name']; ?></p> 

    <p>Tu usuario es <?php echo $_SESSION['user']; ?></p>

    <!-- Como en la parte superior hemos hecho session_start(), podemos "rescatar" cualquier dato que hubiera almacenado dentro
         de la variable superglobal $_Session -->

</body>

</html>