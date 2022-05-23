<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');

echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<br>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo), '<br>';
}
fclose($arquivo);

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\n Adicionado durante leitura");
fclose($arquivo);
