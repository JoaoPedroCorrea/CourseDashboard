<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;

echo '<br>' . $numero;

$numero = $numero - 1;
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;

$numero++;
echo '<br>' . $numero;

$numero -= 5;
echo '<br>' . $numero;

$numero += 10;
echo '<br>' . $numero;

$numero *= 2;
echo '<br>' . $numero;

$numero /= 2;
echo '<br>' . $numero;

$numero %= 6;
echo '<br>' . $numero;

$numero **= 3;
echo '<br>' . $numero;


$texto = 'esse é um texto';

echo '<br>' . $texto;

$texto .= ' qualquer';
echo '<br>' . $texto;

// $variavelInexistente = 'valor existente';
echo '<br>';
var_dump($variavelInexistente);

$valor = $variavelInexistente ?? 'valor default'; // ?? serve para atribuir um valor default a uma variável.
echo '<br>' . $valor;