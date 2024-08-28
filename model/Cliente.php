<?php
class Cliente{

    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $data;
    protected $telefone;
    protected $email;
    protected $senha;

    public function __construct($nome, $sobrenome, $cpf,$data, $telefone,$email,$senha){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->data = $data;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;

    }


    
}