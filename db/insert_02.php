<div class="titulo">Insert #02</div>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
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
        require_once("connection.php");

        $sql = "INSERT INTO register (name, birthdate, email, site, sons, salary) VALUES (?, ?, ?, ?, ?, ?)";
        $connection = newConnection();
        $stmt = $connection->prepare($sql);
        
        $param = [
            $datas['name'],
            $data ? $data->format('Y-m-d') : null,
            $datas['email'],
            $datas['site'],
            $datas['sons'],
            $datas['salary']
        ];

        $stmt->bind_param("ssssid", ...$param);
        
        if($stmt->execute()){
            unset($datas);
        }

    }

}

?>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
    <!-- </div> -->
<?php endforeach ?>

<form action="#" method="post">
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