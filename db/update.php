<div class="titulo">Alterar Registro</div>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php

require_once("connection.php");
$connection = newConnection();

if($_GET['code']){
    $sql = "SELECT * FROM register WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $_GET['code']);

    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $datas = $result->fetch_assoc();
            if($datas['birthdate']){
                $dt = new DateTime($datas['birthdate']);
                $datas['birthdate'] = $dt->format('d/m/Y');
            }
            if($datas['salary']){
                str_replace(".", ",", $datas['salary']);
            }
        }
    }
}



if(count($_POST) > 0){
    $datas = $_POST;
    $erros = [];

    if(trim($datas['name']) === ""){
        $erros['name'] = 'Nome é obrigatório';
    }

    if(isset($datas['birthdate'])) {
        $data = DateTime::createFromFormat('d/m/Y', $datas['birthdate']);
        if(!$data){
            $erros['birthdate'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if(!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)){
        $erros['email'] = 'Email inválido.';
    }

    if(!filter_var($datas['site'], FILTER_VALIDATE_URL)){
        $erros['site'] = 'Site inválido.';
    }

    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];

    if(!filter_var($datas['sons'], FILTER_VALIDATE_INT, $filhosConfig) && $datas['sons'] != 0){
        $erros['sons'] = 'Quantidade de filhos inválida';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if(!filter_var($datas['salary'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salary'] = 'Salário inválido';
    }
    
    if(!count($erros)) {

        $sql = "UPDATE register SET name = ?, birthdate = ?, email = ?, site = ?, sons = ?, salary = ?  WHERE id = ?";
        $stmt = $connection->prepare($sql);
        
        $param = [
            $datas['name'],
            $data ? $data->format('Y-m-d') : null,
            $datas['email'],
            $datas['site'],
            $datas['sons'],
            $datas['salary'],
            $datas['id']
        ];

        $stmt->bind_param("ssssidi", ...$param);
        
        if($stmt->execute()){
            unset($datas);
        }

    }

}

?>

<form action="/exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="update">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" name="code" value="<?= $_GET['code'] ?>" placeholder="Informe o código de cliente" class="form-control">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Buscar</button>
        </div>
    </div>
</form>


<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $datas['id'] ?>">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="name">Nome</label>
            <input type="text" class="form-control <?= $erros['name'] ? 'is-invalid' : '' ?>" id="name" name="name" placeholder="Nome" value="<?= $datas['name'] ?>">
            <div class="invalid-feedback"><?= $erros['name'] ?></div>
        </div>

        <div class="form-group col-md-3">
            <label for="birthdate">Nascimento</label>
            <input type="text" class="form-control <?= $erros['birthdate'] ? 'is-invalid' : ''?>" id="birthdate" name="birthdate" placeholder="Nascimento"
            value="<?= $datas['birthdate'] ?>">
            <div class="invalid-feedback">
                <?= $erros['birthdate'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" id="email" name="email" placeholder="Email" value="<?= $datas['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>" id="site" name="site" placeholder="Site" value="<?= $datas['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sons">Qtde de filhos</label>
            <input type="number" class="form-control <?= $erros['sons'] ? 'is-invalid' : ''?>" id="sons" name="sons" placeholder="Filhos" value="<?= $datas['sons'] ?>">
            <div class="invalid-feedback">
                <?= $erros['sons'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salary">Salário</label>
            <input type="text" class="form-control <?= $erros['salary'] ? 'is-invalid' : ''?>" id="salary" name="salary" placeholder="Salário" value="<?= $datas['salary'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salary'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>