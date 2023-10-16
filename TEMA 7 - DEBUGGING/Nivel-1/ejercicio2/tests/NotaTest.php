<?php 

/* FASE ROJA: es la que se está implementando en este archivo llamado NotaTest.php 
   En esta fase debo escribir los diferentes casos de prueba que las funciones que van a componer mi programa deberían superar.
   A modo de resumen, los casos de prueba serán, en base a la correspondiente función a testear, los siguientes:
    1- para la primera función, que una vez recibido un número, nos diga si es válido o no para el desarrollo del programa.
       Como se trata de una nota, el método se debería asegurar de que el número está entre 0 y 10, de forma que si recibe 
       un valor fuera de esos límites, debería fallar. Para probar esta función, crearé 5 pruebas (0,10,,-1,11 y 5.5)
    2- para la segunda función, que debe recibir la nota entre el 0 y el 10, progarmaré unas pruebas para probar que el valor
       devuelto por esta segunda función esté entre 0 y 100.
    3- en último lugar, los casos de prueba para la función que devolverá el grado del alumno.
    
    MUY IMPORTANTE: en esta primera fase (ROJA), no he escrito aún ninguna función de mi programa final. Si ejecuto los test en 
    este momento, obtendré unos primeros errores inmediatos del tipo "Error: Call to undefined function esNumeroValido()"... 
    porque esas funciones aún ni siquiera existen y por eso no se encuentran.
*/

    //require_once "src/EvaluaNota.php"; // => Para hacer los tests con el código "definitivo"
    require_once "src/Nota.php"; // Como no estoy utilizando clases, aunque defina un namespace en los archivos y en el autoload, 
                                // necesito igualmente importar el fichero donde estarán las funciones que quiero testear.
    use PHPUnit\Framework\TestCase;

    class NotaTest extends TestCase {
        // TESTS O CASOS DE PRUEBA PARA LA PRIMERA FUNCIÓN DE MI PROGRAMA QUE QUERRÉ UTILIZAR (validar que el número esté entre 0 y 10)
        public function testElNumeroEstaEntre1Y10() {
            $this->assertTrue(esNumeroValido(0));
            $this->assertTrue(esNumeroValido(10));
            $this->assertFalse(esNumeroValido(-1));
            $this->assertFalse(esNumeroValido(11));
            $this->assertTrue(esNumeroValido(5.5));
        }
        // TESTS O CASOS DE PRUEBA PARA LA SEGUNDA FUNCIÓN DE MI PROGRAMA QUE QUERRÉ UTILIZAR (porcentaje entre 0 y 100)
        public function testPortentajeEntre0Y100(){
            $this->assertEquals(0, calculaPorcentajeNota(0));
            $this->assertEquals(100, calculaPorcentajeNota(10));
            $this->assertEquals(55, calculaPorcentajeNota(5.5));
            $this->assertEquals(70, calculaPorcentajeNota(7));
        }
        // TESTS O CASOS DE PRUEBA PARA LA TERCERA FUNCIÓN DE MI PROGRAMA QUE QUERRÉ UTILIZAR (verificar grado)
        public function testVerificarGrado() {
            $this->assertEquals("SUSPENDIDO", verificarGrado(0));
            $this->assertEquals("SUSPENDIDO", verificarGrado(32));
            $this->assertEquals("TERCERA DIVISION", verificarGrado(33));
            $this->assertEquals("TERCERA DIVISION", verificarGrado(44));
            $this->assertEquals("SEGUNDA DIVISION", verificarGrado(45));
            $this->assertEquals("SEGUNDA DIVISION", verificarGrado(59));
            $this->assertEquals("PRIMERA DIVISION", verificarGrado(60));
            $this->assertEquals("PRIMERA DIVISION", verificarGrado(100));
        }
        
}



?>