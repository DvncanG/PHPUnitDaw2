<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once('./clases/Cajero.php');

final class CajeroTest extends TestCase {

    public function testRetirada() {
        $cajero = new Cajero();
        $saldo = $cajero->retirada(2500, 3000);
        $this->assertEquals("Saldo insuficiente", $saldo);
    }

    public function testIngreso() {
        $cajero = new Cajero();
        $saldo = $cajero->ingreso(2500, 3000);
        $this->assertEquals(5500, $saldo);
    }

}
