<div class="titulo">Switch</div>

<?php

$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'luxo'){
    $carro = "Mercedes";
    $preco = 250000;
} else if($categoria === 'suv'){
    $carro = "Renagade";
    $preco = 80000;
} else if($categoria === 'sedan'){
    $carro = "Etios";
    $preco = 55000;
} else {
    $carro = "Mobi";
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p> Carro: $carro <br>Preço: R$ $precoFormatado</p>";

$categoria = 'suv';

switch(strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p> Carro: $carro <br>Preço: R$ $precoFormatado</p>";

