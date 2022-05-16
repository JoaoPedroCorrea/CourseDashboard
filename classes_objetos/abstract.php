<div class="titulo">Abstract</div>

<?php

abstract class Abstraction {
    public abstract function methodZero();
    protected abstract function methodOne($parameter);
}

abstract class AbstractionChild {
    public function methodZero() {
        echo "Method Zero running <br>";
    }

    public abstract function methodTwo();

}

class Concrete extends AbstractionChild {
    public function methodZero(){
        echo "Extended Method Zero <br>";
        parent::methodZero();
    }

    public function methodOne($parameter) {
        echo "Running Method One with $parameter <br>";
    }

    public function methodTwo(){
        echo "Running MethodTwo <br>";
        $this->methodOne('internal');
    }
}

$c = new Concrete();
$c->methodZero();
$c->methodOne('external');
$c->methodTwo();