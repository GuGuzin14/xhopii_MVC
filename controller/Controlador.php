<?php

require_once "../model/BancoDeDados.php";
require_once "../model/Produto.php";
class Controlador{

    private $bancoDeDados;

    public function __construct(){

        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
        
    }
    /*
    public function __construct($host,$login,$senha,$dataBase){
        $this->bancoDeDados= new BancoDeDados($host,$login,$senha,$dataBase);
    }
    */

    public function cadastrarProduto($nome,$fabricante,$descricao,$valor){
        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProdutos(){
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            return "<section class =\"conteudo-bloco\">".
            "<h2>". $produto["nome"] . "</h2>".
            "<p>Fabricante:" . $produto["fabricante"] . "</p>".
            "<p>Descrição:" . $produto["descricao"] . "</p>".
            "<p>Valor:" . $produto["valor"] . "</p>".
            "</section>";

        }
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

    function retornarClientes(){

        $conexao = conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }
    
    
    
}
?>