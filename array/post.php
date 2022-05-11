<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <select name="estado">
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
    </select>
    <button>Enviar</button>
</form>

<?php

print_r($_POST);
echo '<br>';
echo count($_POST);

