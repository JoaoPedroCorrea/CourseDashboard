<div class="titulo">Metodos Mágicos</div>

<?php

class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        echo 'constructor called <br>';
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct(){}

    public function __toString(){
        return "{$this->name} have {$this->age} years.";
    }

    public function show(){
        echo $this . "<br>";
    }

    public function __get($attribute){
        echo "reading attribute not declared: {$attribute} <br>";        
    }

    public function __set($attribute, $value){
        echo "Changing attribute not declared: {$attribute}/{$value} <br>";
    }

    public function __call($method, $arguments){
        echo " Trying execute method '${method}'";
        echo "with parameter -> ";
        print_r($arguments);
    }

}

$pessoa = new Person('John', 22);
$pessoa->show(); // calling _toString
echo $pessoa . '<br>'; // calling __toString

$pessoa->fullName = "showwww"; // calling __set
$pessoa->fullName; // __get
echo $pessoa->name; // call attribute directly without __get

$pessoa->exec(); // __call
