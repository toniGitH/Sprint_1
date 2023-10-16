<?php 

    // No necesitamos especificar require "NumberChecker" porque está configurado el "autoload" en el "composer.json"
    namespace App; // Vamos a "colocar" tanto la clase a probar como la clase que contiene las pruebas dentro del namespace APP
    use PHPUnit\Framework\TestCase; // Esto es obligatorio

    class NumberCheckerTest extends TestCase {

        public function testIsEvenConParPositivo() {
            //$numberChecker = new App\NumberChecker(4); // Si no puesiera este archivo de pruebas dentro del mismo namespase App, todas las llamadas a la clase NumberChecher se deberían hacer de esta forma, utilizando el "nombre cualificado"
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