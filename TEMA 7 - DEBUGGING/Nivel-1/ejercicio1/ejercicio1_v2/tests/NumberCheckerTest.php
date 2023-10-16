<?php 

    // No definimos ningún namespace puesto que en el autoload hemos establecido como namespase el ""
    // Con esta configuración, podemos seguir utilizando el nombre de la clase NumberChecker y no su nombre cualificado
    // Además, no hace falta especificar, ni en el archivo de la clase a probar ni en el archivo la clase de pruebas ningún namespace

    use PHPUnit\Framework\TestCase; // Esto es obligatorio

    class NumberCheckerTest extends TestCase {

        public function testIsEvenConParPositivo() {
            $numberChecker = new NumberChecker(4);
            $resultado = $numberChecker->isEven();
            $this->assertTrue($resultado);
        }
        public function testIsEvenConParNegativo() {
            $numberChecker = new NumberChecker(-4);
            $resultado = $numberChecker->isEven();
            $this->assertTrue($resultado);
        }
        public function testIsEvenConImparPositivo() {
            $numberChecker = new NumberChecker(5);
            $resultado = $numberChecker->isEven();
            $this->assertFalse($resultado);
        }
        public function testIsEvenConImparNegativo() {
            $numberChecker = new NumberChecker(-5);
            $resultado = $numberChecker->isEven();
            $this->assertFalse($resultado);
        }
        public function testIsEvenConCero() {
            $numberChecker = new NumberChecker(0);
            $resultado = $numberChecker->isEven();
            $this->assertTrue($resultado);
        }
        public function testIsPositiveConPositivo(){
            $numberChecker = new NumberChecker(3);
            $resultado = $numberChecker->isPositive();
            $this->assertTrue($resultado);
        }
        public function testIsPositiveConNegativo(){
            $numberChecker = new NumberChecker(-3);
            $resultado = $numberChecker->isPositive();
            $this->assertFalse($resultado);
        }
        public function testIsPositiveConCero(){
            $numberChecker = new NumberChecker(0);
            $resultado = $numberChecker->isPositive();
            $this->assertFalse($resultado);
        }
    }

?>