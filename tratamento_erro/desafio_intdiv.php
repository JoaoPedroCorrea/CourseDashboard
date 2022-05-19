<?php
namespace Aritmetica;

class NaoInteiroExeception extends \Exception {

}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError();
    }
    
    if(($a % $b > 0)) {
        throw new NaoInteiroExeception();
    }

    return $a / $b;

}

