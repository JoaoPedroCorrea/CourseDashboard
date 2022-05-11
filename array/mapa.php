<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 22,
    "cor" => "azul",
    "nome" => "Jão"
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["nome"];
echo '<br>';
var_dump($dados["outra_info"]);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';

print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);
