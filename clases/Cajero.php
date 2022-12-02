<?php

class Cajero {

    //put your code here
    public function retirada($saldo, $retiro) {
        if ($retiro > $saldo) {//Si la cantidad a retirar es menor que el saldo disponible
            throw new Exception("Saldo insuficiente");
        }
        return $saldo - $retiro;
    }

}
