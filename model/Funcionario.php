<?php

class Funcionario{

    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $dataNasc;
    protected $telefone;
    protected $email;
    protected $salario;

    public function __construct($cpf,$nome, $sobrenome, $dataNasc, $telefone, $email, $salario){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data = $dataNasc;
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
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function getData(){
        return $this->dataNasc;
    }
    public function setData($data){
        $this->data = $data;
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
