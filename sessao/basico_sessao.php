<div class="titulo">Sessão</div>

<?php
session_start();

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'João';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'joao.pedro@essentia.com.br';
}

print_r($_SESSION);

?>

<p><a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a></p>