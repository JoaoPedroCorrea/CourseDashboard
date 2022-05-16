<div class="titulo">Interface</div>

<?php
interface Animal {
    function breath();

}

interface Canine {
    function bite(): string;
}

class Dog implements Animal, Canine {
    function breath(){
        return "Vou respirar oxigenio! <br>";
    }

    function bite(): string{
        return 'au au';
    }

}

$animal = new Dog();
echo $animal->breath(), '<br>';
echo $animal->bite(), '<br>'; 

var_dump($animal);

echo '<br>';

var_dump($animal instanceof Dog);
var_dump($animal instanceof Canine);