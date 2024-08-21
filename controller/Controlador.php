<?php

require_once "../model/BancoDeDados.php";
require_once "../model/Produto.php";
class Controlador{

    private $bancoDeDados;

    public function __construct(){

        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhoppi");
        
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
    
}
?>