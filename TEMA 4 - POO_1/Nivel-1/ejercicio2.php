 <?php 

/* ENUNCIADO: 
   Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
   Define dos subclases: Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la forma area().
*/

    class Shape{

        public $alto;
        public $ancho;

        function __construct($paramAlto, $paramAncho){ // Constructor
            $this->alto = $paramAlto;
            $this->ancho = $paramAncho;
        }   
    }

    class Triangulo extends Shape{

        // Hereda el constructor de la clase Shape

        function area(){
            return (($this->ancho)*($this->alto))/2; 
        }
    }

    class Rectangulo extends Shape{

        // Hereda el constructor de la clase Shape

        function area(){
            return ($this->ancho)*($this->alto); 
        }
    }

    $triangulo = new Triangulo(5, 5);
    //var_dump($triangulo); // Sólo para comprobar que éste objeto es de tipo Triangulo y los valores de sus atributos
    echo "El área del triángulo es " . $triangulo->area() . "\n";

    $rectangulo = new Rectangulo(5, 5);
    //var_dump($rectangulo); // Sólo para comprobar que éste objeto es de tipo Triangulo y los valores de sus atributos
    echo "El área del rectángulo es " . $rectangulo->area();

?>