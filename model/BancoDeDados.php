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
    
    $conexao = $this->conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                 VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
    mysqli_query($conexao,$consulta);
}

function inserirProduto($nome, $fabricante, $descricao, $quantidade, $valor, $imagem) {
    
    $conexao = $this->conectarBD();
    $consulta = $conexao->prepare("INSERT INTO produtos (nome, fabricante, descricao, quantidade, valor, imagem) VALUES (?, ?, ?, ?, ?, ?)");
    $null = NULL;
    $consulta->bind_param("sssiib", $nome, $fabricante, $descricao, $quantidade, $valor, $null);
    $consulta->send_long_data(5, $imagem);

    if ($consulta->execute()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto: " . $consulta->error;
    }

    $consulta->close();
    $conexao->close();

    header('Location: ../view/cadastroProduto.php');
    die();
}

function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario){
    
    $conexao = $this->conectarBD();
    $consulta = "INSERT INTO funcionarios (funccpf, funcnome, funcsobrenome, funcdatanas, functelefone, funcemail, funcsalario) 
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
    $conexao = $this->conectarBD();
    $consulta = "SELECT * FROM produtos";
    $listaProdutos = mysqli_query($conexao,$consulta);
    return $listaProdutos;
}
function retornarFuncionarios(){
    $conexao = $this->conectarBD();
    $consulta = "SELECT * FROM funcionarios";
    $listaFuncionarios = mysqli_query($conexao,$consulta);
    return $listaFuncionarios;
}

}
?>