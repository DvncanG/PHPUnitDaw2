<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once('./clases/Calculadora.php');

final class CalculadoraTest extends TestCase {

    public function testSuma() {
        $calc = new Calculadora();
        $result = $calc->suma(3, 4);
        $this->assertEquals(7, $result);
    }

    public function testResta() {
        $calc = new Calculadora();
        $result = $calc->resta(3, 4);
        $this->assertEquals(-1, $result);
    }

    public function testMultiplicacion() {
        $calc = new Calculadora();
        $result = $calc->multiplicacion(3, 4);
        $this->assertEquals(12, $result);
    }
    
        public function testDivision() {
        $calc = new Calculadora();
        $result = $calc->division(6, 2);
        $this->assertEquals(3, $result);
    }

}
