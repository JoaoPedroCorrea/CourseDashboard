<div class="titulo">Include Once</div>

<?php

ini_set('display errors', 1);

include('include_once_arquivo.php');
require('include once_arquivo.php');


echo "Váriavel = {$variavel}";
$variavel = 'Variavel alterada';
echo "Variavel = '{$variavel} .<br>";

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = "Variável alterada";
echo "Variável = '{$variavel}'.<br>";

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";