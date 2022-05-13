<div class="titulo">Desafio Recursividade</div>

<?php

/* $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10

*/

$array = [1, 2, [3, 4, 5], [[[6]]], [7, [8, 9]], 10];

function printArray($array, $level = '>'){
    foreach($array as $element) {
        if(is_array($element)){
            printArray($element, $level . $level[0]);
        } else {
            echo "$level $element <br>";
        }
    }
}

printArray($array);


$food = ['Maça', ['Banana', 'Pera'], [[['Kiwi']]]];

function printFood($food, $level = '$'){
    foreach($food as $element) {
        if(is_array($element)){
            printFood($element, $level . $level[0]);
        } else {
            echo "$level $element <br>";
        }
    }
}

printFood($food);
