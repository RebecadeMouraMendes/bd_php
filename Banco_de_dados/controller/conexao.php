<?php

class Conexao { //Classe com visibilade pública 
    private $host = "localhost"; // Não declara o tipo (onde o nosso usuário vai entrar)
    private $usuario = "root";  // Atribui root para usuario
    private $senha = ""; // Sem senha definida
    private $banco = "exemplo_aula_pw"; // Banco do Sql
    private $conexao; // Variavel ainda indefinida  

    public function __construct(){ //Método construtor
        $this -> conexao = new mysqli($this -> host, $this->usuario, $this->senha, $this-> banco);
        //Acessando pelo this (encapsulamento) criação da instância, mysqli(classe com crud) e parametros 
        if($this->conexao->connect_error){ 
            die("Falha na conexão: ". $this->conexao->connect_error); //Se não conseguir cumprir o primeira método retorna falha
        }
    }

    public function getConexao(){ //Função retorna a conexão com o banco de dados
        return $this -> conexao;
    }
}

?>