<?php
class Produto{

protected $nome;
protected $fabricante;
protected $descricao;
protected $valor;
protected $imagem;

public function __construct($nome,$fabricante,$descricao,$valor,$imagem)
{
    $this->nome = $nome;
    $this->fabricante = $fabricante;
    $this->descricao = $descricao;
    $this->valor = $valor;    
    $this->quantidade = $quantidade;    
    $this->imagem = $imagem;    
}

        public function get_Nome(){
            return ($this->nome);
        }

        public function set_Nome($nome){        
            $this->nome = $nome;
        }

        public function get_Fabricante(){
            return ($this->fabricante);
        }
        public function set_Fabricante($fabricante){
            $this->fabricante = $fabricante;
        }
        public function get_descricao(){
            return ($this->descricao);
        }
        public function set_descricao($descricao){
            $this->descricao = $descricao;
        }
        public function get_valor(){
            return ($this->valor);
        }
        public function set_quantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function get_quantidade(){
            return ($this->quantidade);
        }

public function aplicarCupom($cupomTaxa){
    $valorDesconto = ($this->valor*$cupomTaxa) / 100;
    $this->valor = $this->valor - $valorDesconto;
}        

    }
