<div class="titulo">Update PDO</div>

<?php
require_once("connection_pdo.php");

$sql = "UPDATE register SET name = ?, birthdate = ?, email = ?, site = ?, sons = ?, salary = ? WHERE id = ?";

$connection = newConnection();
$stmt = $connection->prepare($sql);

$result = $stmt->execute([
    'Gui', 
    '2004-10-4', 
    'gui@gmail.com', 
    'http://guipro.io', 
    0, 
    2300, 
    16
]);

if($result) {
    echo "success";
} else {
    print_r($stmt->errorInfo());
}

$connection->close();
