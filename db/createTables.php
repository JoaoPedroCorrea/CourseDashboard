<div class="titulo">Create Tables</div>

<?php

require_once("connection.php");

// DDL - Data Definition Lang.
$sql = "CREATE TABLE IF NOT EXISTS register ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL, 
    birthdate DATE, 
    email VARCHAR(100) NOT NULL, 
    site VARCHAR(100), 
    sons INT, 
    salary FLOAT
    )";

$connection = newConnection();
$result = $connection->query($sql);

if($result){
    echo "Success";
} else {
    echo "Error: " . $connection->error;
}

