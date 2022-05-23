<div class="titulo">Insert Register</div>

<?php

require_once("connection.php");

$sql = "INSERT INTO cadastro (name, birthdate, email, site, sons, salary) VALUES ( 
    'Marieta', 
    '1990-07-22', 
    'marieta@email.com', 
    'https://marieta123.com', 
    2, 
    13000
)";

