<div class="titulo">Include Função</div>

<?php

function loadFile() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '<br>';

}

echo "Novamente no arquivo include_funcao<br>";
// echo soma(1, 8) . '!<br>';
loadFile();

echo "Váriavel = '{$variavel}'.";
var_dump($variavel);
