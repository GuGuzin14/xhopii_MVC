<?php

require_once "../model/BancoDeDados.php";
require_once "../model/Produto.php";

class Controlador{

    private $bancoDeDados;

    public function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost", "root", "", "xhopii");
    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade){
        $produto = new Produtos($nome, $fabricante, $descricao, $valor, $quantidade);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        $resultado = '';
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            $resultado .= "<section class=\"conteudo-bloco\">"; 
            $resultado .= "<h2>" . $produto["nome"] . "</h2>"; 
            $resultado .= "<p>Fabricante: " . $produto["fabricante"] . "</p>"; 
            $resultado .= "<p>Descrição: " . $produto["descricao"] . "</p>"; 
            $resultado .= "<p>Quantidade: " . $produto["quantidade"] . "</p>"; 
            $resultado .= "<p>Valor: " . $produto["valor"] . "</p>";
            $resultado .= "</section>"; 
        }
        
        return $resultado; 
    }
    

        public function visualizarClientes(){
            $listaClientes = $this->bancoDeDados->retornarClientes();
            $resultado = '';
            while($cliente = mysqli_fetch_assoc($listaClientes)){
                $resultado .= "<section class=\"conteudo-bloco\">";
                $resultado .= "<h2>" . $cliente["nome"] . " " . $cliente["sobrenome"] . "</h2>";
                $resultado .= "<p>CPF: " . $cliente["cpf"] . "</p>";
                $resultado .= "<p>Data Nascimento: " . $cliente["dataNascimento"] . "</p>";
                $resultado .= "<p>Telefone: " . $cliente["telefone"] . "</p>";
                $resultado .= "<p>E-mail: " . $cliente["email"] . "</p>";
                $resultado .= "</section>";
            }
            return $resultado;
        }
    
    public function visualizarFuncionarios(){
        $listaFuncionarios = $this->bancoDeDados->retornarFuncionarios();
        $resultado = '';
        while($funcionario = mysqli_fetch_assoc($listaFuncionarios)){
            $resultado .= "<section class=\"conteudo-bloco\">";
            $resultado .= "<h2>" . $funcionario["funcnome"] . " " . $funcionario["funcsobrenome"] . "</h2>";
            $resultado .= "<p>CPF: " . $funcionario["funccpf"] . "</p>";
            $resultado .= "<p>Data Nascimento: " . $funcionario["funcdatanas"] . "</p>";
            $resultado .= "<p>Telefone: " . $funcionario["functelefone"] . "</p>";
            $resultado .= "<p>E-mail: " . $funcionario["funcemail"] . "</p>";
            $resultado .= "<p>Salario: " . $funcionario["funcsalario"] . "</p>";
            $resultado .= "</section>";
        }
        return $resultado;
    }

    public function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
        
        $this->bancoDeDados->inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
    }

    public function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario){
        
        $this->bancoDeDados->inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);
    }

    
}
?>
