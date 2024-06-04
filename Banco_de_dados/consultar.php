<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Banco_de_dados/controller/pessoaController.php'; //Importação única do arquivo, se existente
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2><br>Consulta</h2>
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