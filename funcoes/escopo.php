<div class="titulo">Função e Escopo</div>

<?php
function printMessage() {
    echo "Olá! ";
    echo "Até mais! <br>";
}

printMessage();
printMessage();

$variavel = 1;

function changeValue() {
    $variavel = 2;
    echo "durante a função: $variavel <br>";
}

echo "antes da função: $variavel <br>";
changeValue();
echo "depois da função: $variavel";

function realChangeValue(){
    global $variavel;
    $variavel = 3;
    echo "durante $variavel <br>";
}

echo "antes da função: $variavel <br>";
realChangeValue();
echo "depois da função: $variavel";

var_dump(realChangeValue());