<div class="titulo">Insert PDO</div>

<?php
require_once("connection_pdo.php");

$sql = "INSERT INTO register (name, email, birthdate, site, sons, salary) 
VALUES ( 
    'Guilherme Filho', 
    'guizin@gmail.com', 
    '1998-7-21', 
    'https://guidamassa.com', 
    0, 
    2000
)";

$connection = newConnection();

// print_r(get_class_methods($connection));

if($connection->exec($sql)){
    $id = $connection->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $connection->errorCode();
    print_r($connection->errorInfo());
}

$connection->close();