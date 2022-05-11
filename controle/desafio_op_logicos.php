<div class="titulo">Desafio Operadores Lógicos</div>

<!--Dois trabalhos -> terça e quinta! 
    - Se os dois forem executados -> tv 50' e sorvete;
    - Se apenas um for executado -> tv 32' e sorvete;
    - Se nenhum for executado -> Fica em casa mais saúdavel
-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

echo '<br>';

if(!!$_POST['t1'] && !!$_POST['t2']){

    echo "Vamos tomar sorvete e comprar uma televisão de 50'!";

} else if(!!$_POST['t1'] != !!$_POST['t2']){

    echo "Vamos tomar sorvete e comprar uma televisão de 32'!";

} else {
    echo "Vamos ficar em casa mesmo...";
}
