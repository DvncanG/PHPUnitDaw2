<?php

class Calculadora {

    public function suma($a, $b) {
        if ($a === NULL || $b === NULL || !is_numeric($a) || !is_numeric($b))
            throw new InvalidArgumentException("Los valores no son numéricos");
        return $a + $b;
    }

    public function resta($a, $b) {
        if ($a === NULL || $b === NULL || !is_numeric($a) || !is_numeric($b))
            throw new InvalidArgumentException("Los valores no son numéricos");
        return $a - $b;
    }

    public function multiplicacion($a, $b) {
        if ($a === NULL || $b === NULL || !is_numeric($a) || !is_numeric($b))
            throw new InvalidArgumentException("Los valores no son numéricos");
        return $a * $b;
    }

    public function division($a, $b) {
        if ($a === NULL || $b === NULL || !is_numeric($a) || !is_numeric($b))
            throw new InvalidArgumentException("Los valores no son numéricos");
        if ($b === 0)
            throw new DivisionByZeroError();
        return $a / $b;
    }

}

?>