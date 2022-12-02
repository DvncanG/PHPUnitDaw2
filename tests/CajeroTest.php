<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once('./clases/Cajero.php');

final class CajeroTest extends TestCase {

    public function testRetirada() {
        $cajero = new Cajero();
        $this->expectException(Exception::class);
        $cajero->retirada(2500, 3000);
    }

}
