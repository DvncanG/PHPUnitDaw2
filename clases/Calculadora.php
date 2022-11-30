<?php


class Calculadora{
    public function __construct(){
        echo "Calculadora numérica";
    }
    
    public function suma($a, $b){
        return $a+$b;
    }

    public function resta($a, $b){
        return $a-$b;
    }

    public function multiplicacion($a, $b){
        return $a*$b;
    }

    public function division($a, $b){
        return $a/$b;
    }
}
?>