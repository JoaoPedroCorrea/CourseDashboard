<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    // Atributos
    public $nome = "Anonimo";
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome} <br> Idade: {$this->idade}";
    }

}

$c1 = new Cliente();
$c1->nome = "Jão";
$c1->idade = 22;
$c1->apresentar();

$c2 = new Cliente;
$c2->nome = 'marcos';
$c2->idade = 30;
$c2->apresentar();