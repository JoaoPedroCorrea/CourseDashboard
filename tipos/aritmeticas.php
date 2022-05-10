<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1; 
echo "<br>";

var_dump(1 + 1);
echo "<br>";

echo 1 + 2.5;
echo "<br>";

echo 10 - 2;
echo "<br>";

echo 2 * 5;
echo "<br>";

echo 7 / 4;
echo "<br>";

echo intdiv(7, 4);
echo "<br>";

echo round(7 / 4);
echo "<br>";

echo 7 % 4;
echo "<br>";

echo 7 / 0;
echo "<br>";

echo 4 ** 2;
echo "<br>";

// Precedencia de operadores:
// () => ** => / * % => + - 
echo '<p class="titulo">Precedência</p>';
echo 2 + 3 * 4;
echo "<br>";
echo (2 + 3) * 4;
echo "<br>";
echo 2 + 3 * 4 **2;
echo "<br>";
echo ((2 + 3) * 4) ** 2;

