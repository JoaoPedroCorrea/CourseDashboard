<div class="titulo">Select</div>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php

require_once("connection.php");

$sql = "SELECT name, birthdate, email, id FROM register";

$connection = newConnection();
$result = $connection->query($sql);

$register = [];

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $register[] = $row;
    }    
} else if($connection->error){
    echo "Error: " . $connection->error;
}

$connection->close();
?>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Birthdate</th>
    </thead>
    <tbody>
        <?php foreach($register as $reg): ?>
            <tr>
                <td><?= $reg['id'] ?></td>
                <td><?= $reg['name'] ?></td>
                <td><?= $reg['email'] ?></td>
                <td><?= $reg['birthdate'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

