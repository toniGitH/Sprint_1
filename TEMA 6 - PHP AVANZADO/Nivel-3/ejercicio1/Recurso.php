<?php 

    require_once "temaRecurso.php";
    require_once "tipoRecurso.php";


    class Recurso{

        // Definición de las propiedades de la clase:
        private string $nombre;
        private temaRecurso $tema;
        private string $url;
        private tipoRecurso $tipo;

        // Constructor:
        public function __construct(string $paramNombre, temaRecurso $paramTema, string $paramUrl, tipoRecurso $ParamTipo){
            $this->nombre=$paramNombre;
            $this->tema=$paramTema;
            $this->url=$paramUrl;
            $this->tipo=$ParamTipo;
        }

        // Métodos getters:

        function getNombreRecurso(): string{
            return $this->nombre;
        }

        function getTemaRecurso(): temaRecurso{
            return $this->tema;
        }

        function getUrlRecurso(): string{
            return $this->url;
        }

        function getTipoRecurso(): tipoRecurso{
            return $this->tipo;
        }

 
    } // Fin de la clase Recurso

?>