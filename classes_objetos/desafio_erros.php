<div class="titulo">Desafio 7 Erros</div>

<?php

interface Template {
    function methodOne();
    public function methodTwo($parameter);
}

abstract class Abstrata{
    public function methodThree(){
        echo "I'm working";
    }
}

class Concreta extends Abstrata {
    function __construct($parameter){
        
    }
}

$example = new Concreta('teste');
$example->methodThree();