<?php

require_once 'C:\xampp\htdocs\Banco_de_dados\model\pessoa.php';

class PessoaController{
    private $pessoa;

    public function __construct(){
        $this->pessoa = new Pessoa();
    }

    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setNome($_POST['endereco']);
        $this->pessoa->setNome($_POST['bairro']);
        $this->pessoa->setNome($_POST['cep']);
        $this->pessoa->setNome($_POST['cidade']);
        $this->pessoa->setNome($_POST['estado']);
        $this->pessoa->setNome($_POST['telefone']);
        $this->pessoa->setNome($_POST['celular']);

        $this ->pessoa->inserir();
        
    }
}

?>