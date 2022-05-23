<?php

function newConnection($database = 'curso') {
    $server = 'localhost';
    $user = 'joao';
    $password = 'senha123';

    $connection = new mysqli($server, $user, $password, $database);

    if($connection->connect_error){
        die('Error: ' . $connection->connect_error);
    }

    return $connection;
    
}