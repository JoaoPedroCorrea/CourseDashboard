<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milhas</option>
        <option value="milha-km">Milhas -> Km</option>
        <option value="metro-km">Metros -> Km</option>
        <option value="km-metro">Km -> Metros</option>
        <option value="c-f">Celsius -> Fahrenheit</option>
        <option value="f-c">Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<?php

// echo($_POST['conversao']);

const KM_METER = 1000;
const KM_MILES = 0.621371; 

$tipoConversao = $_POST['conversao'];

$valor = $_POST['param'] ?? 0;
$message = '';
$conversao = '';


switch(strtolower($tipoConversao)) {
    case 'km-milha':
        $conversao = $valor * KM_MILES;
        $message = "$valor Km(s) = $conversao Milha(s)";
        break;
    case 'milha-km':
        $conversao = $valor / KM_MILES;
        $message = "$valor Milha(s) = $conversao Km(s)";
        break;
    case 'metro-km':
        $conversao = $valor / KM_METER;
        $message = "$valor Metro(s) = $conversao Km(s)";
        break;
    case 'km-metro':
        $conversao = $valor * KM_METER;
        $message = "$valor Km(s) = $conversao Metro(s)";
        break;
    case 'c-f':
        $conversao = $valor * 1.8 + 32;
        $message = "$valor °C = $conversao °F";
        break;
    case 'f-c':
        $conversao = ($valor -32) * 5 / 9 ;
        $message = "$valor °F = $conversao °C";
        break;
    default:
        $message = "Nenhum valor convertido";
        break;
}

echo "<p>$message</p>";
