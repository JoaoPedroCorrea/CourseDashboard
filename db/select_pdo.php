<div class="titulo">Select PDO</div>

<?php
require_once("connection_pdo.php");

$connection = newConnection();
$sql = "SELECT * FROM register";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$result = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo '<hr>';

$sql = "SELECT * FROM register LIMIT :qtde OFFSET :begin";

$stmt = $connection->prepare($sql);

$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':begin', 3, PDO::PARAM_INT);

if($stmt->execute()){
    $result = $stmt->fetchAll();
    print_r($result);
} else {
    echo "ERROR: " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

echo '<hr>';

$sql = "SELECT * FROM register WHERE id = :id";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':id', 5, PDO::PARAM_INT);
// if($stmt->execute([10])){
if($stmt->execute()){
    $result = $stmt->fetch();
    print_r($result);
} else {
    echo "ERROR: " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

$connection->close();