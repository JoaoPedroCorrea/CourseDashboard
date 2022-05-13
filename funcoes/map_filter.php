<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais = [];

foreach($notas as $nota){
    $notasFinais[] = round($nota);
}

print_r($notasFinais);

$notasFinais2 = array_map(round, $notas);
echo '<br>';

print_r($notasFinais2);

echo '<br>';

$apenasAprovados = [];

foreach($notas as $nota){
    if($nota >= 7) {
        $apenasAprovados[] = $nota;
    }
}

print_r($apenasAprovados);

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';

$apenasAprovados2 = array_filter($notas, aprovados);
print_r($apenasAprovados2);

function calculoLegal($nota) {
    $notaFinal = round($nota) +1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);
