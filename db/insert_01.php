<div class="titulo">Insert #01</div>

<?php

require_once("connection.php");

$sql = "INSERT INTO register (name, birthdate, email, site, sons, salary) VALUES ( 
    'Cibele', 
    '1991-05-14', 
    'cibels@gmail.com', 
    'https://cibis.com.br', 
    2, 
    6000
)";

$connection = newConnection();
$result = $connection->query($sql);

if($result){
    echo "Success";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();
