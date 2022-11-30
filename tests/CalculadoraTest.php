<?php declare(strict_types=1);
 use PHPUnit\Framework\TestCase;
require_once('./clases/Calculadora.php');

 
 final class CalculadoraTest extends TestCase{
    
     public function testSuma(){
         $calc = new Calculadora();
         $result = $calc->suma(3,4);
         $this->assertEquals(7, $result);
     }
 }
 