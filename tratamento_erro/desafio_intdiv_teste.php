<div class="titulo">Desafio intdiv</div>

<?php
require_once('desafio_intdiv.php');

use function \Aritmetica\intdiv;

try {
    echo intdiv(8,3) . '<br>';
} catch(\Aritmetica\NaoInteiroExeception $e){
    echo 'Resultado não é um inteiro <br>';
}

try {
    echo intdiv(8,0) . '<br>';
} catch(DivisionByZeroError $e){
    echo 'Divisão por zero <br>';
}

try {
    echo intdiv(8,2) . '<br>';
} catch(Exception $e){
    echo 'Erro';
}

try{
    echo \intdiv(8,3);
} catch(\Exception $e) {
    echo "Erro: {$e->getMessage()}";
}
