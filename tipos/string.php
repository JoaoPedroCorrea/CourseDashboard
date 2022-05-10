<div class="titulo">String</div>

<?php

echo "Eu sou uma sting";
echo "<br>";

var_dump("Eu também");
echo "<br>";

// concatenação
echo "nós também" . ' somos';
echo "<br>", "também aceito", " virgulas";

echo "'Teste' " . '"teste"';
echo "<br>";

print("Também existe a função print");
echo "<br>";

// Algumas funções

echo "<br>" . strtoupper('maximizado');
echo "<br>" . strtolower('MINIMIZADO');
echo "<br>" . ucfirst('só a primeira letra');
echo "<br>" . ucwords("todas as palavras");
echo "<br>" . strlen("Quantas letras?");
echo "<br>" . mb_strlen("eu também", "utf-8");
echo "<br>" . substr('Só uma parte mesmo', 7, 6);
echo "<br>" . str_replace('isso', 'aquilo', 'Trocar isso');

