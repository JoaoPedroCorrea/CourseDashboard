<div class="titulo">Create Database</div>

<?php

require_once("connection.php");

$connection = newConnection(null);
$sql = 'CREATE DATABASE curso';

$result = $connection->query($sql);

if($result){
    echo "Success";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();
