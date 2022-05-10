<div class="titulo">Tipo Boolean</div>

<?php

echo TRUE;
echo "<br>";
echo FALSE;
echo "<br>";

echo var_dump(TRUE);
echo "<br>";
echo var_dump(false);
echo "<br>";
echo var_dump("true");
echo "<br>";

echo is_bool(false);
echo "<br>";


// fazer as regras de conversões
echo '<p>Regras</p>';
echo "<br>";
echo var_dump((bool) 0); // apenas o zero é convertido pra false 
echo "<br>";
echo var_dump((bool) 20);
echo "<br>";
echo var_dump((bool) ""); // false
echo "<br>";
echo var_dump((bool) "0"); // false
echo "<br>";
echo var_dump((bool) " "); // todo resto é true
echo "<br>";

echo var_dump(!!"false"); 

