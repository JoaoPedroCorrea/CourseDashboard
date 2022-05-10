<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p style='margin-bottom: 0px;'>Negação Lógica</p><hr style='margin-top: 0px;'>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p style='margin-bottom: 0px;'>Tabela Verade 'AND' (E)</p><hr style='margin-top: 0px;'>";
var_dump(true && true);
var_dump(true && false);
var_dump(false and true);
var_dump(false and false);
var_dump(true and 3 > 2 and 7<= 7);
 
echo "<p style='margin-bottom: 0px;'>Tabela Verade 'OR' (ou)</p><hr style='margin-top: 0px;'>";
var_dump(true  || true);
var_dump(true  || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true  OR true);
var_dump(true  OR false);
var_dump(false OR true);
var_dump(false OR false);

echo "<p style='margin-bottom: 0px;'>Tabela Verade 'XOR' (OU Exclusivo)</p><hr style='margin-top: 0px;'>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true  != true);
var_dump(true  != false);
var_dump(false != true);
var_dump(false != false);

echo "<p style='margin-bottom: 0px;'>Exemplo</p><hr style='margin-top: 0px;'>";
$idade = 62;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar';
} else if($idade >= 65 && $sexo === 'M'){
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}
