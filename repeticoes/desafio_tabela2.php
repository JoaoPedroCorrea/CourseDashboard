<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="POST">
    <input type="number" name="lines" value=<?= $_POST['lines'] ?>>
    <input type="number" name="columns" value=<?= $_POST['columns'] ?>>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php

    $lines = intval($_POST['lines']);
    $columns = intval($_POST['columns']);
    $numbers = 1;

    if(!$lines) $lines = 9;
    if(!$columns) $columns = 9;

    for($i = 0; $i < $lines; $i++){
        echo "<tr>";
        for($j = 0; $j < $columns; $j++){
            echo "<td>$numbers</td>";
            $numbers++;
        }
        echo "</tr>";
    }

    ?>
</table>

<style>
    table{
        border: 1px solid #111;
    }
    table td {
        border: 1px solid #111;
    }
</style>