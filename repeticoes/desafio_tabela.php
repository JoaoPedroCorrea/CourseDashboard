<div class="titulo">Desafio Tabela</div>

<?php

$array = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

// foreach($array as $line){
//     foreach ($line as $value){
//         echo "$value ";
//     }
//     echo "<br>";
// }

?>

<table>
    <?php
        foreach($array as $line) {
            echo "<tr>";
            foreach($line as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<table>
    <?php
        foreach($array as $index => $line){
            $style = $index % 2 === 1 ? 'background-color: lightblue;' : '';
            echo "<tr style='{$style}'>";
            foreach($line as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
    ?>
</table>



<style>
    table{
        border: 1px solid #111;
        border-collapse: collapse;
        margin: 20px 0px
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px;
    }
</style>