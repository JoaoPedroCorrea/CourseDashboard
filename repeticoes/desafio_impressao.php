<div class="titulo">Desafio Impressão</div>

<!-- 
    -Imprima apenas os valores do array que contém indice par
    -Desafio adicional: Resolver com for e foreach
    -Valores esperado: AAA, CCC, EEE
 -->

<?php

$array = ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF"];

foreach($array as $indice => $valor) {
    if($indice % 2 === 0){
        echo "$indice -> $valor <br>";
    }
}

for($i = 0; $i < count($array); $i++) {
    if($i % 2 !== 0) {
       continue;
    }
    echo "{$array[$i]} <br>";
}