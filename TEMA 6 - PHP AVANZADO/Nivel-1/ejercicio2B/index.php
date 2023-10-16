<?php 

    session_start();

    $nombrePersona="Invitado";
    $nombreUsuario="Invitado";

    if (isset($_SESSION["name"]) && isset($_SESSION["user"])) {
        $nombrePersona = $_SESSION["name"];
        $nombreUsuario = $_SESSION["user"];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Nivel 1</title>
    <style>
        .contenedor{
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            background-color: tomato;
            color: white;
            display: flex;
            flex-direction: column;
        }
        fieldset{
            padding: 20px;
            display: flex;
            justify-content: space-evenly;
            border: 2px dashed white;
        }
        h1{
            text-align: center;
            margin: 15px 0 0 0;
        }

        h2{
            text-align: center;
            margin: 0 0 30px 0;
        }
        button{
            background-color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 20%;
            margin: 0px auto;
        }
        button:hover{
            background-color: black;
        }
        button a{
            text-decoration: none;
            color: tomato;
            font-size: 0.8em;
        }

    </style>
</head>
<body>

    <div class="contenedor">

        <form action="crearSesion.php" method="post">

            <fieldset>

                <legend>IDENTIFÍCATE</legend>

                <div id="nom">
                    <label for="idNombre">NOMBRE:</label>
                    <input type="text" name="nombre" id="idNombre" required>
                </div>
                <div id="user">
                    <label for="idUsuario">USUARIO:</label>
                    <input type="text" name="usuario" id="idUsuario" required>
                </div>

                <div id="submit">
                    <input type="submit" value="ENVIAR">
                </div>
                
            </fieldset>
            
        </form>

        <h1>Hola, <?php echo $nombrePersona?></h1>
        <h2>Tu nombre de usuario es: <?php echo $nombreUsuario?></h2>
        <button type="button"><a href="borrarSesion.php">CERRAR SESIÓN</a></button>



    </div>
    
</body>
</html>