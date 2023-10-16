<?php

   session_start(); // Creamos una sesión para este usuario

   /* El valor tecleado en el formulario que hay en el archivo "index.html" dentro del input type text cuyo atributo name=nombre,
      se almacena dentro de la variable supergobal $_Session, que es un array. Concretamente, he decido almacenarlo dentro de ese
      array asociando el valor con la clave "name".*/
   $_SESSION["name"]= $_POST["nombre"];
   if (!isset($_POST["nombre"]) || $_POST["nombre"]=="") {
      $_SESSION["name"]="INVITADO";
   }
   /* El valor tecleado en el formulario que hay en el archivo "index.html" dentro del input type text cuyo atributo name=usuario,
      se almacena dentro de la variable supergobal $_Session, que es un array. Concretamente, he decido almacenarlo dentro de ese
      array asociando el valor con la clave "usuario".*/
   $_SESSION["user"]= $_POST["usuario"];
   if (!isset($_POST["usuario"]) || $_POST["usuario"]=="") {
      $_SESSION["user"]="INVITADO";
   }
   header("Location: index.php"); /* Una vez almacenados los datos dentro de la variable superglobal $_Session, hacemos una
                                          redirección al archivo "leerSesion.php"*/

?>