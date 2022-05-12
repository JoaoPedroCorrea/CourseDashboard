<div class="titulo">Desafio For</div>

<!-- 
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
 -->

<?php

$hashtag = '';
for($cont = 1; $cont <= 5; $cont++){
    $hashtag .= '#';
    echo "$hashtag <br>";
}


$array = ['#', '##', '###', '####', '#####'];

for($i = 0; $i <= count($array); $i++){
    echo "{$array[$i]} <br>";
}

for($impressao = '#'; $impressao !== '######'; $impressao .= '#'){
    echo "$impressao <br>";
}