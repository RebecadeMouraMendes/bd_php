<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Banco_de_dados/controller/conexao.php'; //Importação única do arquivo, se existente

class Pessoa{ //Classe publica
    private $id; //Variáveis 
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    //Gets e Sets, encapsulamento das variáveis 
    public function getId(){ 
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    public function __construct(){ //Método construtor
        $this->conexao = new Conexao(); //Instancia do objeto da classe conexão
    }

    //Método insirir faz a conexão com o banco de dados
    public function inserir(){
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)"; //Declaração para o sql, de forma indefinida
        $stmt = $this->conexao->getConexao()->prepare($sql); // stmt acessa conexão, realiza o método e utiliza o prepare
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); //Define os parametros no caso do s, String
        return $stmt->execute(); //Retorna e executa
    }

    public function listar(){ //Método listar
        $sql = "SELECT * FROM pessoa"; //Declaração para sql, utilizando select
        $stmt = $this->conexao->getConexao()->prepare($sql); //Acessa e busca a conexão, prepara o banco de dados para receber a declaração na variável sql 
        $stmt->execute(); //execução do armazenamento stmt
        $result = $stmt->get_result(); // Busca os resultados do select
        $pessoas = []; // Vetor pessoas
        while($pessoa = $result->fetch_assoc()){ //Enquanto existir informações, retorna uma matriz onde armazena os registros 
            $pessoas[] = $pessoa; //Atribuição no vetor
        }
        return $pessoas; //Retorna o vetor
    }
    
    public function buscarPorId($id){  //Método buscarPorId
           $sql = "SELECT * FROM pessoa WHERE id = ?"; //Declaração para sql, utilizando select e where
        $stmt = $this->conexao->getConexao()->prepare($sql);  //Acessa e busca a conexão, prepara o banco de dados para receber a declaração na variável sql 
        $stmt->bind_param('i', $id); //Define os parametros 
        $stmt->execute(); //execução do armazenamento stmt
        $result = $stmt->get_result();  // Busca os resultados do select
        return $result->fetch_assoc(); //Enquanto existir informações, retorna uma matriz onde armazena os registros 
    }
    public function atualizar($id){
        $sql = "UPDATE pessoa SET nome = ?, endereco = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, telefone = ?, celular = ? WHERE id = ?"; //Declaração para o sql, de forma indefinida
        $stmt = $this->conexao->getConexao()->prepare($sql); // stmt acessa conexão, realiza o método e utiliza o prepare
        $stmt->bind_param('ssssssssi', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular, $id); //Define os parametros no caso do s se refere a String e i para o id
        return $stmt->execute();  //execução do armazenamento stmt
    }

    public function excluir($id){
        $sql = "DELETE FROM pessoa WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
    
}

?>