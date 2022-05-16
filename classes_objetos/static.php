<div class="titulo">Membros Estáticos</div>

<?php
 class A {
     public $notStatic = 'Variavel de instância';
     public static $static = 'Variavel de classe (static)';
    
     public function showA(){
         echo "Not static:{$this->notStatic} <br>";

        //echo "Static: {$this->static} <br>";
        //echo "Static: {self::$static} <br>";

        echo "Static: " . self::$static . "<br>";

     }

     public static function showStatic() {
        //  echo "Não estático = {$this->notStatic}<br>";
         echo "Static: " . self::$static . '<br>';
     }
     
}

$objectA = new A();
$objectA->showA();

A::showStatic();