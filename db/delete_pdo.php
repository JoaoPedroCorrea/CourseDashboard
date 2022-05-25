<div class="titulo">Delete PDO</div>

<?php
require_once("connection_pdo.php");

$connection = newConnection();

$sql = "DELETE FROM register WHERE id = :id";

$stmt = $connection->prepare($sql);
$stmt->bindValue(':id', 18);

if($stmt->execute()){
    echo "Deleted";
} else {
    echo "ERROR: " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

$connection->close();
