<?php
 use PHPUnit\Framework\TestCase;
 use Calculadora;
 
 final class CalculadoraTest extends TestCase{
     public function testSuma(){
         $calc = new Calculadora();
         $this->assertEquals(8, $calc->suma(3,4));
     }
 }
 