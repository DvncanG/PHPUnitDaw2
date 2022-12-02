<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once('./clases/Calculadora.php');

final class CalculadoraTest extends TestCase {

    private $calculadora;

    public function setUp(): void {
        $this->calculadora = new Calculadora();
    }

    public function testSuma() {
        $this->assertEquals(7, $this->calculadora->suma(3, 4));
    }

    public function testSumaValoresNulos() {
        $this->expectException(InvalidArgumentException::class);
        $this->calculadora->suma(NULL, NULL);
    }

    public function testSumaValoresNoNumericos() {
        $this->expectException(InvalidArgumentException::class);
        $this->calculadora->suma("b", "a");
    }

    public function testDivision() {
        $this->assertEquals(3, $this->calculadora->division(6, 2));
    }

    public function testDvisionValoresNoNumericos() {
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals(7, $this->calculadora->suma("b", "a"));
    }

    public function testDivisionByZero() {
        $this->expectException(DivisionByZeroError::class);
        $this->calculadora->division(6, 0);
    }

}
