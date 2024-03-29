<div class="titulo">Traits #02</div>

<?php

trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;
    }
}

$user = new Usuario();
var_dump($user->validarString(' '));
echo '<br>';
var_dump($user->validarStringMelhor(' '));
