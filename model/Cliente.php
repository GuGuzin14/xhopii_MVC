<?php
class Cliente{
    protected $cpf;
    protected $nome;
    protected $sobrenome;
    protected $dataNascimento;
    protected $telefone;
    protected $email;
    protected $senha;

    public function __construct($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    
    }

    public function get_cpf(){
        return $this->cpf;
    }

    public function set_cpf($cpf){
        $this->cpf = $cpf;
    }

    public function get_nome(){
        return $this->nome;
    }    

    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function get_sobrenome(){
        return $this->sobrenome;
    }
    
    public function set_sobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function get_dataNascimento(){
        return $this->dataNascimento;
    }

    public function set_dataNascimento($dataNascimento){
        $this->dataNascimento =$dataNascimento;
    }

    public function get_telefone(){
        return $this->telefone;
    }

    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_email($email){
        $this->email = $email;
    }

    public function get_senha($senha){
        return $this->senha = $senha;
    }

    public function set_senha($senha){
        $this->senha = $senha;
    }

    
}