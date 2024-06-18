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
                <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                <a class="nav-link active" href="consultar.php?acao=consultar">Consultar</a>
            </div>
            </div>
        </div>
        </nav>
    </div>
  </div>
</div>
<br>
    <div class="container">
        <h2>Consulta</h2><br>
        <table class="table">
            <thead>
            <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            <tbody>
                <?php
                    $pessoaController = new PessoaController(); // Instância do pessoaController
                    $pessoas = $pessoaController->listar(); // Atribui a listagem 
                    foreach ($pessoas as $pessoa){  //Laço de repetição para vetores e atribui o valor pessoa para a variavel pessoas
                        ?>
                            <tr>
                                <th><?php echo $pessoa['nome']?></th>  <!-- Exibe os valores de pessoa, de acordo com o index do nome-->
                                <th><?php echo $pessoa['telefone']?></th>
                                <th><?php echo $pessoa['celular']?></th>
                                <th> <a href="editar.php?acao=editar&id=<?php echo $pessoa['id']; ?>">Editar</a></th> <!-- Link para ir para a página editar passando os parametros de ação e id -->
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
            </thead>
        </table>
    </div>
</body>
</html>