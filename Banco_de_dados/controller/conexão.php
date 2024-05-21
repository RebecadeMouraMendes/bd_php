<?php

class Conexao { //Classe com visibilade pública 
    private $host = "localhost"; // Não declara o tipo (onde o nosso usuário vai entrar)
    private $usuario = "root"; 
    private $senha = ""; // Sem senha
    private $banco = "exemplo_aula_pw"; //Sql
    private $conexao; // Vazio 

    public function _construct(){ //Método construtor
        $this -> conexao = new mysqli($this -> host, $this->usuario, $this->senha, $this-> banco);
        //Acessando pelo this (encapsulamento) criação da instância, mysqli(classe com crud) e parametros 
        if($this->conexao->connect_error){
            die("Falha na conexão: ". $this->conexao->connect_error); //Se não conseguir cumprir o primeira  método retorna um dia
        }
    }

    public function getConexao(){ //Fução retorna a conexão com o banco de dados
        return $this -> conexao;
    }
}

?>