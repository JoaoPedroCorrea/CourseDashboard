<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('oale6ktfmhnkj35em8rfk2gj2g');
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>';
echo $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}
