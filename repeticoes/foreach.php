<div class="titulo">Foreach</div>

<?php

$array = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

foreach ($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice -> $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['a', 'b', 'c']
];

foreach ($matrix as $line) {
    
    foreach ($line as $value){
        echo "$value ";
    }
    echo "<br>";
}

$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as &$double){
    $double *= 2;
    echo "$double <br>";
}

print_r($numbers);