<div class="titulo">Desafio Palindromo</div>

<form action="#" method="post">
    <input type="text" name="word">
    <button>Check</button>
</form>

<?php

$name = $_POST['word'];

function wordVerify($name){
    if($name == strrev($name)){
        echo "é um palindromo";
    } else {
        echo "não é palindromo";
    }
}

wordVerify($name);