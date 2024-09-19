<?php

session_start();
require('../controller/Controlador.php');


$controlador = new Controlador();

//Login
if(isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])){

    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    //echo "Email: " . $email . "Senha: " . $senha;
    header('Location:../view/home.php');
    die();
}

//Cadastro de Cliente
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
    
    // Chama o método do objeto $controlador
    $controlador->inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    die();
}

//Cadastro de Funcionário
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
    
    // Chama o método do objeto $controlador
    $controlador->inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);

    header('Location:../view/cadastroFuncionario.php');
    die();
}

// Cadastro de produto
if (!empty($_POST['nome']) && !empty($_POST['fabricante']) && 
    !empty($_POST['descricao']) && !empty($_POST['quantidade']) &&
     !empty($_POST['valor'])) {

    if (isset($_FILES['imagem']) && is_uploaded_file($_FILES['imagem']['tmp_name'])) {
        $imgData = file_get_contents($_FILES['imagem']['tmp_name']);

        $nome = $_POST['nome'];
        $fabricante = $_POST['fabricante'];
        $descricao = $_POST['descricao'];
        $quantidade = (int) $_POST['quantidade'];
        $valor = (float) $_POST['valor'];

        $controlador->InserirProduto($nome, $fabricante, $descricao, $quantidade, $valor, $imgData);

        header('Location:../view/cadastroProduto.php');
        die();
    } else {
        echo "Erro no upload da imagem.";
    }
    } else {
    echo "Preencha todos os campos.";
    }




?>