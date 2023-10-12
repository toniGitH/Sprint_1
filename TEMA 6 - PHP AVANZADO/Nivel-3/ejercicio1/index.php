<?php 

    require_once "Recurso.php";

    $recurso1=new Recurso("EL SCOPE EN PHP", temaRecurso::PHP, "www.escueladeprogramacion/php/scope.com", tipoRecurso::ARTICULO_WEB);
    $recurso2=new Recurso("¿QUIÉN INVENTÓ EL LENGUAJE HTML?", temaRecurso::HTML, "www.escueladeprogramacion/html/inventorHTML.com", tipoRecurso::ARCHIVO);
    $recurso3=new Recurso("APRENDE GRID CSS EN 30 SEGUNDOS", temaRecurso::CSS, "www.escueladeprogramacion/css/grid.com", tipoRecurso::VIDEO);

    echo "Tienes disponible un " . $recurso1->getTipoRecurso()->value . " llamado " . $recurso1->getNombreRecurso() . " del curso sobre " . $recurso1->getTemaRecurso()->name . " en la url " . $recurso1->getUrlRecurso() .  "\n"; 
    echo "Tienes disponible un " . $recurso2->getTipoRecurso()->value . " llamado " . $recurso2->getNombreRecurso() . " del curso sobre " . $recurso2->getTemaRecurso()->name . " en la url " . $recurso2->getUrlRecurso() .  "\n"; 
    echo "Tienes disponible un " . $recurso3->getTipoRecurso()->value . " llamado " . $recurso3->getNombreRecurso() . " del curso sobre " . $recurso3->getTemaRecurso()->name . " en la url " . $recurso3->getUrlRecurso() .  "\n"; 

/*  IMPORTANTE: 
    Cuando se intenta hacer un echo de un enum (p.ej. echo $recurso1->getTipoRecurso()) se produce un error porque los "casos enumerados"
    son objetos y no tienen un equivalente escalar (por ejemplo, un string).
    Como yo quiero imprimir un string que me de información sobre ese "caso", una posible solución sería utilizar el método mágigo __toString(),
    pero parece ser que con enums ésto no está permitido.
    Por tanto, para lograr lo que quiero, he tenido que utilizar las llamadas "enumeraciones respaldadas" (que es cuando se definen un case
    de la forma case PHP = "PHP";).
        Ejemplo para case ARTICULO_WEB = "artículo web";
    De esta forma, cuando el objeto $recurso1 llama al método getter que le va a "devolver" el case correspondiente del enum, acompañamos
    esa llamada de "->value", y se nos devolverá el "valor" que le hemos dado al case en su definición. El value en el ejemplo anterior
    sería "artículo web".
    También he recurrido a "->name", que nos devuelve directamente el nombre del case. El name en el ejemplo anterior sería "ARTICULO_WEB".
    
    Además, para poder utilizar las enumeraciones respaldadas, al definir el enum es necesario establecer el tipo de dato que será el
    equivalente escalar (:string en este ejercicio). Para las enumeraciones puras no, puesto que no se define ningún escalar equivalente.
*/

?>