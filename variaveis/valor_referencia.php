<div class="titulo">Valor vs. Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;
echo '<br>';


// Atribuição por valor

$variavelValor = $variavel;
echo $variavelValor;
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo " $variavelValor";

// Atribuição por referencia

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavelReferencia";
echo "<br> $variavel";


// Atribuição por referencia usa o & antes da $variavel