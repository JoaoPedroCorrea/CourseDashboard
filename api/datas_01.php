<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';

echo date('D, d \d\e M \d\e Y') . '<br>';

echo strftime('%A, %d de %B de %Y') . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo strftime('%A, %d de %B de %Y') . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strftime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

