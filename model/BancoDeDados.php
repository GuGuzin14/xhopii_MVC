<?php

class BancoDeDados{
    private $host;
    private $login;
    private $senha;
    private $dataBase;


    public function __construct($host, $login, $senha, $dataBase){
        $this->host = $host; //Exemplo: 127.0.0.1
    
        $this->login = $login;
    
        $this->senha = $senha;
        
        $this->dataBase = $dataBase;
    }

public function conectarBD(){
    $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
    if(!$conexao){
        die("falha na conexão: " . mysqli_connect_error());
    }
    return $conexao;
}

public function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                 VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
    mysqli_query($conexao,$consulta);
}

public function inserirProduto($produto){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (nome,fabricante, descricao, valor) 
                 VALUES ('$produto->get_Nome()',
                        '$produto->get_Fabricante()',
                        '$produto->get_Descricao()',
                        '$produto->get_Valor()')";
    mysqli_query($conexao,$consulta);
}

function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (cpf, nome, sobrenome, dataNascimento, telefone, email, salario) 
                 VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$salario')";
    mysqli_query($conexao,$consulta);
}

public function retornarClientes(){
    
    $conexao = $this->conectarBD(); 
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return $listaClientes;
}

function retornarProdutos(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM produto";
    $listaProdutos = mysqli_query($conexao,$consulta);
    return $listaProdutos;
}
function retornarFuncionarios(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionarios";
    $listaFuncionarios = mysqli_query($conexao,$consulta);
    return $listaFuncionarios;
}

}
?>