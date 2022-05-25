<div class="titulo">Delete #02</div>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
require_once("connection.php");

$sql = "SELECT id, name, email, birthdate FROM register";

$connection = newConnection();
$result = $connection->query($sql);
$register = [];

if($_GET['exclude']){
    $sqlDelete = "DELETE FROM register WHERE id = ?";
    $stmt = $connection->prepare($sqlDelete);
    $stmt->bind_param("i", $_GET['exclude']);
    $stmt->execute();
}


if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $register[] = $row;
    }
} else if($connection->error) {
    echo "ERROR: " . $connection->error;
}

$connection->close();

?>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthdate</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach($register as $reg) : ?>
            <tr>
                <td><?= $reg['id'] ?></td>
                <td><?= $reg['name'] ?></td>
                <td><?= $reg['email'] ?></td>
                <td><?= $reg['birthdate'] ?></td>
                <td>
                    <a href="/exercicio.php?dir=db&file=delete_02&exclude=<?= $reg['id'] ?>" class="btn btn-danger">Remove</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>