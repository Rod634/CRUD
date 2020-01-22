<?php 

namespace App\Model;

class ClientesDB
{
    public function create(Cliente $c)
    {
        $sql = 'INSERT INTO dados (nome, idade, email, cpf) VALUES (?,?)';
        $act = Conexao::getConn()->prepare($sql);
        $act->bindValue(1, $c->getNome());
        $act->bindValue(2, $c->getIdade());
        $act->bindValue(3, $c->getEmail());
        $act->bindValue(4, $c->getCpf());
        $act->execute();
    }
}

?>