<div class="titulo">Delete</div>

<?php

require_once("connection.php");

$sql = "DELETE FROM register WHERE id = 1";

$connection = newConnection();
$result = $connection->query($sql);

if($result) {
    echo "Register has been removed";
} else {
    echo "ERROR: " . $connection->error;
}

$connection->close();
