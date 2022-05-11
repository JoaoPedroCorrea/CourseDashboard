<div class="titulo">Comparação Arrays</div>

<?php

$arr1 = ["nome" => "joão", "idade" => 22];
$arr2 = ["nome" => "joão", "idade" => 22];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ["nome" => "joão", "idade" => 22];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';

$arr4 = ["nome" => "joão", "idade" => 22];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);

