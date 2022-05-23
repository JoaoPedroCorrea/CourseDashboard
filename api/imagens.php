<div class="titulo">Imagens</div>

<?php
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';

$nomeArquivo = $_FILES['arquivo']['name'];

$arquivo = $pastaUpload . $nomeArquivo;

$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Problemas no arquivo";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="arquivo" >
<button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if(stripos($arquivo, '.png') > 0): ?>
            <li>
                <img src="../files/<?= $arquivo ?>" height="120px"></img>
            </li>
        <?php endif ?>
    <?php endforeach ?> 
</ul>

<style>
    ul {
        list-style: none;
    }
</style>