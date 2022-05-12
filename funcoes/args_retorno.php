<div class="titulo">Argumentos & Retorno</div>

<?php

function getMessage() {
    return 'Seja bem vindo!';
}

function getMessageWithName($nome){
    return "bem vindo, {$nome}";
}

echo '<br>' . getMessageWithName('João');

getMessage();
echo '<br>';
$message = getMessage();
echo $message;
echo '<br>' . getMessage();
echo '<br>';
var_dump(getMessage());
echo '<br>';

function soma($a, $b){
    return $a + $b;
}

echo soma(3, 2);

function changeValue($a, $newValue){
    $a = $newValue;
}

$variavel = 1;

changeValue($variavel, 4);
echo '<br>' . $variavel;

function realChangeValue(&$a, $newValue){
    $a = $newValue;
}

realChangeValue($variavel, 5000);
echo "<br> $variavel";
