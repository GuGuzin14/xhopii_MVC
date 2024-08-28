<?php

session_start();
require "../controller/Controlador.php";

$controlador = new Controlador();

// Login
if (isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])) {
    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    // Lógica de autenticação (não implementada aqui)
    header('Location:../view/home.php');
    exit();
}

// Cadastro de Cliente
if (isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) && 
    isset($_POST['inputCPF']) && isset($_POST['inputDataNasc']) && 
    isset($_POST['inputTelefone']) && isset($_POST['inputEmail']) &&
    isset($_POST['inputSenha'])) {

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputDataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    // Adicione a lógica para o controlador de cliente aqui
    $controlador->inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    exit();
}

// Cadastro de Funcionário
if (isset($_POST['inputNomeFunc']) && isset($_POST['inputSobrenomeFunc']) && 
    isset($_POST['inputCPFFunc']) && isset($_POST['inputDataNascFunc']) && 
    isset($_POST['inputTelefoneFunc']) && isset($_POST['inputEmailFunc']) &&
    isset($_POST['inputSalarioFunc'])) {

    $nome = $_POST['inputNomeFunc'];
    $sobrenome = $_POST['inputSobrenomeFunc'];
    $cpf = $_POST['inputCPFFunc'];
    $dataNasc = $_POST['inputDataNascFunc'];
    $telefone = $_POST['inputTelefoneFunc'];
    $email = $_POST['inputEmailFunc'];
    $salario = $_POST['inputSalarioFunc'];

    // Adicione a lógica para o controlador de funcionário aqui
    $controlador->inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);

    header('Location:../view/cadastroFuncionario.php');
    exit();
}

// Cadastro de Produto
if (!empty($_POST['inputNomeProd']) && !empty($_POST['inputFabricanteProd']) && 
    !empty($_POST['inputDescricaoProd']) && !empty($_POST['inputValorProd'])) {

    $nome = $_POST['inputNomeProd'];
    $fabricante = $_POST['inputFabricanteProd'];
    $descricao = $_POST['inputDescricaoProd'];
    $valor = $_POST['inputValorProd'];

    $controlador->inserirProduto($nome, $fabricante, $descricao, $valor);
    
    header('Location:../view/cadastroProduto.php');
    exit();
}

?>
