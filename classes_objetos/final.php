<div class="titulo">Modificador Final</div>

<?php

abstract class Abstracta {
    abstract public function method1();

    final public function method2() {
        echo 'Not change<br>';
    }
}

class Classe extends Abstracta {
    public function method1() {
        echo 'running method 1 <br>';
    }

}


$classe = new Classe();
$classe->method1();
$classe->method2();

final class Unica {
    public $attr = 'Working';
}

$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica {
//      public $att2
// // }