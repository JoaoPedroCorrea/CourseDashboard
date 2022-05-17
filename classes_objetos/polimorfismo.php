<div class="titulo">Polimorfismo</div>

<?php

use Person as GlobalPerson;

abstract class Food {
    public $weight;
}

class Rice extends Food {

}

class Beans extends Food {
    
}

class Icecream extends Food {
    
}

class Person {
    public $weight;

    function __construct($weight){
        $this->weight = $weight;
    }

    public function feed(Food $food) {
        $this->weight += $food->weight;
    }

}

$r = new Rice();
$r->weight = 0.25;

$b = new Beans();
$b->weight = 0.20;

$i = new Icecream();
$i->weight = 0.10;

$p = new Person(54.35);
$p->feed($r);
$p->feed($i);
$p->feed($b);

echo $p->weight;