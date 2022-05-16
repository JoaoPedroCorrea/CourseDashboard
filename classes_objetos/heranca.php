<div class="titulo">Herança</div>

<?php

class Person {
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct(){
        echo 'Bye!';
    }

    public function  represent() {
        echo "{$this->name}, {$this->age} anos <br>";
    }

}

class User extends Person {
    public $login;

    function __construct($name, $age, $login){
        // $this->name = $name;
        // $this->age = $age;
        parent::__construct($name, $age);
        $this->login = $login;
        echo "User Created.<br>";
    }

    function __destruct(){
        echo "User deleted<br>";
        parent::__destruct();
    }

    public function represent(){
        echo "@{$this->login}: ";
        parent::represent();
    }

}

$person = new User('João', 22, 'joazin');
$person->represent();

unset($person);
