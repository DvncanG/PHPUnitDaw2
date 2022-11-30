<?php

class Cajero {

    //put your code here
    public function retirada($saldo, $retiro) {
        if ($saldo < $retiro) {
            return "Saldo insuficiente";
        } else {
            return $saldo - $retiro;
        }
    }

    public function ingreso($saldo, $ingreso) {
        return $saldo + $ingreso;
    }

}
