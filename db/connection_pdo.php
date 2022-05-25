<?php

function newConnection($database = 'curso') {
    $server = 'localhost';
    $user = 'joao';
    $password = 'senha123';

    try{
        $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
        return $connection;
    } catch(PDOException $e) {
        die("Erro>" . $e->getMessage());
    }

}

NewConnection();
