<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); // true
var_dump(1 > 1);  // false
var_dump(1 >= 1); // true
var_dump(1 != 1); // false
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 <> 1); // false

var_dump(111 === 111);    // true
var_dump(111 === '111');  // false
var_dump(111 != '111');   // false
var_dump(111 !== '111');  // true

echo "<p style='margin-bottom: 0px;'>Relacionais no If/Else</p><hr style='margin-top: 0px;'>";
$idade = 25;
if($idade < 18) {
    echo "Menor de idade <br>";
} else if($idade < 65) {
    echo "Adulto <br>";
} else {
    echo "Terceira idade";
}

echo "<p style='margin-bottom: 0px;'> Spaceship </p><hr style='margin-top: 0px;'>";
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 40);

echo "<p style='margin-bottom: 0px;'> Valores podem ser V ou F </p><hr style='margin-top: 0px;'>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
