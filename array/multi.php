<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "João",
        "idade" => 22,
        "time" => "Corinthians"
    ],
    [
        "nome" => "Leo",
        "idade" => 18,
        "time" => "Vaxco"
    ],
];

print_r($dados);
echo '<br>';
echo $dados[0]["idade"];
echo '<br>';
echo $dados[1]["time"];

$dados[] = [
    "nome" => "Douglas",
    "idade" => 28,
    "time" => "Corinthians"
];

print_r($dados);
