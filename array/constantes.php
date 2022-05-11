<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ["laranja", "Abacaxi"];
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';

echo FRUTAS[0];

const CARROS = [
    "fiat" => "uno",
    "ford" => "fiesta"
];

echo '<br>';
echo CARROS["fiat"];

define('CIDADES', array("Belo Horizonte", "Recife"));
// CIDADES[0] = "Rio de Janeiro";
echo '<br>' . CIDADES[1];
