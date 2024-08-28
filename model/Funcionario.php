<?php

class Funcionario{

    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $data;
    protected $telefone;
    protected $email;
    protected $salario;

    public function __construct($nome, $sobrenome, $cpf, $data, $telefone, $email, $salario){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->data = $data;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->salario = $salario;

    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }


    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getCpf(){  
        return $this->cpf;
    }
    public function getData(){
        return $this->data;
    }
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSalario(){
        return $this->salario;
    }
}
