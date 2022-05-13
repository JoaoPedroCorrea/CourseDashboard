<div class="titulo">Recursividade</div>

<?php
function somaUmAte($number) {
    $soma = 0;
    for(; $number >= 1; $number--) {
        $soma += $number;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

function somaUmAte2($number) {
    $soma = 0;
    for($i = 1; $i <= $number; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte2(5) . '<br>';

function somaRecursivaUmAte($number){
    // Condição de parada!!
    if($number === 1) {
        return 1;
    }
    return $number + somaRecursivaUmAte($number - 1);
}

echo somaRecursivaUmAte(5);