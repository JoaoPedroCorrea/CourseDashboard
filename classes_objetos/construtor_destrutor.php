<div class="titulo">Construtor & Destrutor</div>

<?php

class Person {
    
    public $name;
    public $age;

    function __construct($newName, $age) {
        echo 'Construtor invocado! <br>';
        $this->name = $newName;
        $this->age = $age;
    }

    function __destruct(){
        echo 'Destruido';
    }

    public function show() {
        echo "{$this->name}, {$this->age} anos <br>";
    }

}

$people = new Person('João', 22);
$people->show();
unset($people);

echo '<br>';

$peopleB = new Person('Pedro', 22);
$peopleB->show();
$peopleB = null;

