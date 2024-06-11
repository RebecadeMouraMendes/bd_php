<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Banco_de_dados/controller/pessoaController.php'; //Importação única do arquivo, se existente
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA WEB</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
  <div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Formulário</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                <a class="nav-link active" href="consultar.php">Consultar</a>
            </div>
            </div>
        </div>
        </nav>
    </div>
  </div>
</div>
<br>
<div class="container text-start">
  <div class="row">
    <div class="col">
    <p class="fs-4">Editar o formulário</p>
    &nbsp;
    <br>
    <?php
        $pessoaController = new PessoaController();
        $pessoa = $pessoaController->buscarPorId($_GET['id']);
    ?>
    <form method = "POST" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id'] ?>"> <!-- Endereço de onde os dados são enviados  -->
    <p class="fs-5">Nome:</p>
    <div class="input-group mb-3" name="nome">
        <input type="text" class="form-control"  name="nome" value="<?php echo $pessoa['nome']; ?>">
    </div>
    <br>
    <p class="fs-5">Endereço:</p>
    <div class="input-group mb-3" name="endereco">
        <input type="text" class="form-control" value="<?php echo $pessoa['endereco']; ?> name="endereco">
    </div>
    <br>
    <p class="fs-5">Bairro:</p>
    <div class="input-group mb-3" name="bairro">
        <input type="text" class="form-control" value="<?php echo $pessoa['bairro']; ?>" name="bairro">
    </div>
    <br><br>
    <p class="fs-5">Cep:</p>
    <div class="input-group mb-3" name="cep">
        <input type="text" class="form-control" value="<?php echo $pessoa['cep']; ?>" name="cep">
    </div>
    <br><br>
    <p class="fs-5">Cidade:</p>
    <div class="input-group mb-3" name="cidade">
        <input type="text" class="form-control" value="<?php echo $pessoa['cidade']; ?>" name="cidade">
    </div>
    <br><br>
    <p class="fs-5">Estado:</p>
    <div class="input-group mb-3" name="estado">
        <input type="text" class="form-control" value="<?php echo $pessoa['estado']; ?>" name="estado">
    </div>
    <br><br>
    <p class="fs-5">Telefone:</p>
    <div class="input-group mb-3" name="telefone">
        <input type="text" class="form-control" value="<?php echo $pessoa['telefone']; ?>" name="telefone">
    </div>
    <br><br>
    <p class="fs-5">Celular:</p>
    <div class="input-group mb-3" name="celular">
        <input type="text" class="form-control" value="<?php echo $pessoa['celular']; ?>" name="celular">
    </div>
    <br>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>