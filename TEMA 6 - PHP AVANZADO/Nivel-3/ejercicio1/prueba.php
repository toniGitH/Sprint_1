<?php 

enum EstadoPedido {
    case PENDIENTE;
    case EN_PROCESO;
    case COMPLETADO;
    case CANCELADO;

    public function __toString() {
        return match ($this) {
            self::PENDIENTE => 'PENDIENTE',
            self::EN_PROCESO => 'EN PROCESO',
            self::COMPLETADO => 'COMPLETADO',
            self::CANCELADO => 'CANCELADO',
        };
    }
}

class Pedido {
    private int $id;
    private EstadoPedido $estado;

    public function __construct(int $id, EstadoPedido $estado) {
        $this->id = $id;
        $this->estado = $estado;
    }

    public function obtenerEstado(): EstadoPedido {
        return $this->estado;
    }

    public function cambiarEstado(EstadoPedido $nuevoEstado) {
        $this->estado = $nuevoEstado;
    }
}

// Crear un pedido en estado PENDIENTE
$pedido = new Pedido(1, EstadoPedido::PENDIENTE);

// Obtener el estado del pedido
$estadoActual = $pedido->obtenerEstado();
echo "Estado actual del pedido: $estadoActual\n";

// Cambiar el estado del pedido a COMPLETADO
$pedido->cambiarEstado(EstadoPedido::COMPLETADO);
$estadoActual = $pedido->obtenerEstado();
echo "Nuevo estado del pedido: $estadoActual\n";





/*
enum EstadoPedido {
    case PENDIENTE;
    case EN_PROCESO;
    case COMPLETADO;
    case CANCELADO;
}

class Pedido {
    private int $id;
    private EstadoPedido $estado;

    public function __construct(int $id, EstadoPedido $estado) {
        $this->id = $id;
        $this->estado = $estado;
    }

    public function obtenerEstado(): EstadoPedido {
        return $this->estado;
    }

    public function cambiarEstado(EstadoPedido $nuevoEstado) {
        $this->estado = $nuevoEstado;
    }
}

// Crear un pedido en estado PENDIENTE
$pedido = new Pedido(1, EstadoPedido::PENDIENTE);

// Obtener el estado del pedido
$estadoActual = $pedido->obtenerEstado();
echo "Estado actual del pedido: $estadoActual\n";

// Cambiar el estado del pedido a COMPLETADO
$pedido->cambiarEstado(EstadoPedido::COMPLETADO);
$estadoActual = $pedido->obtenerEstado();
echo "Nuevo estado del pedido: $estadoActual\n";
*/





/*
enum temaRecurso{
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case LARAVEL;
}

enum tipoRecurso{
    case ARCHIVO;
    case ARTICULO_WEB;
    case VIDEO;
}

class Recurso{

    // Definición de las propiedades de la clase:
    private $nombre;
    private temaRecurso $tema;
    private $url;
    private tipoRecurso $tipo;

    // Constructor:
    public function __construct($paramNombre, temaRecurso $paramTema, $paramUrl, tipoRecurso $ParamTipo){
        $this->nombre=$paramNombre;
        $this->tema=$paramTema;
        $this->url=$paramUrl;
        $this->tipo=$ParamTipo;
    }

    // Métodos getters:

    function getNombreRecurso(){
        return $this->nombre;
    }

    function getTemaRecurso(){
        return $this->tema;
    }

    function getUrlRecurso(){
        return $this->url;
    }

    function getTipoRecurso(){
        return $this->tipo;
    }


} // Fin de la clase Recurso

$recurso1=new Recurso("El scope en PHP", temaRecurso::PHP, "www.escueladeprogramacion/php.com", tipoRecurso::ARTICULO_WEB);
$recurso2=new Recurso("¿Quién inventó el lenguaje HTML?", temaRecurso::HTML, "www.escueladeprogramacion/html.com", tipoRecurso::ARCHIVO);
$recurso3=new Recurso("Aprende CSS GRID en 1 minuto", temaRecurso::CSS, "www.escueladeprogramacion/css.com", tipoRecurso::VIDEO);

echo "Tienes disponible un " . $recurso1->getTipoRecurso() . " llamado " . $recurso1->getNombreRecurso() . " del curso sobre " . $recurso1->getTemaRecurso() . " en la url " . $recurso1->getUrlRecurso() .  "\n"; 
*/
?>