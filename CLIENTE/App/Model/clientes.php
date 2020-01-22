<?php 

namespace App\Model;

class Cliente
{
    private $nome;
    private $cpf;
    private $idade;
    private $email;
   
    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCpf($cpf)
    {
        if(!validaCpf($cpf)){
            
        }else{
            $this->cpf = $cpf;
        }
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setEmail($email)
    {
        if(!validaEmail($email)){     
        }else{
            $this->email = $email;
        }
       
    }
    
    public function validaEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else {
            return false;
        }
    }
    
    public function validaCpf($cpf)
    {
        $cpf = $cpf = preg_replace( '/[^0-9]/is', '', $cpf);
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }else{
            return true;
        }
    }
    
    
}



?>