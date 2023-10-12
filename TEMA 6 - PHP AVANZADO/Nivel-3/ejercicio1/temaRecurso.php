<?php 

    //Enumeración pura

    enum temaRecurso{
        case PHP;
        case CSS;
        case HTML;
        case SQL;
        case LARAVEL;
    }

    /* Esta sería una enumeración respaldada, que en este caso no vamos a utilizar
    enum temaRecurso :string{
        case PHP = "PHP";
        case CSS = "CSS";
        case HTML = "HTML";
        case SQL = "SQL";
        case LARAVEL = "Laravel";
    }
*/


?>