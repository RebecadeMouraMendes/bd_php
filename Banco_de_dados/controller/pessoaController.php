<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Banco_de_dados/model/pessoa.php'; //Importação única do arquivo, se existente

class PessoaController{ // Classe públic 
    private $pessoa; // Variavel pessoa indefinida
    
    public function __construct(){ //Método construtor
        $this->pessoa = new Pessoa(); //Acessando pelo this, com instância
        if($_GET['acao'] == 'inserir'){ //Get definido pela url caso seja igual a inserir efetua o método inserir
        $this->inserir();
        }
        if($_GET['acao'] == 'atualizar'){ //Get definido pela url caso seja igual a atualizar efetua o método editar
            $this->atualizar($_GET['id']);
        }
    }

    public function inserir(){ //Metódo insirir acessa pelo this, instância e definine os parâmetros
        $this->pessoa->setNome($_POST['nome']); //Seta as variaveis e pegam o input do formulário de acordo com o nome
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        $this->pessoa->inserir();  //Acessa e instância
    }

    public function listar(){ //Método listar
        return $this->pessoa->listar(); //Retorna o registro para o banco de dados
    }

    public function buscarPorId($id){ 
        return $this->pessoa->buscarPorId($id); //Retorna o id por meio do método
    }

    public function atualizar($id){
        $this->pessoa->setNome($_POST['nome']); //Seta as variaveis e pegam o input do formulário de acordo com o nome e o destino
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        $this->pessoa->atualizar($id);

    }

    
}
new PessoaController(); // Instância
?>