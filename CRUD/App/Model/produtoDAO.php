<?php

namespace App\Model;

class ProdutoDao
{
	public function create(Produto $p)
	{
		$sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
		$act = Conexao::getConn()->prepare($sql);
		$act->bindValue(1, $p->getNome());
		$act->bindValue(2, $p->getDescricao());
		$act->execute();

	}

	public function read()
	{
	    $sql = 'SELECT * FROM produtos';
	    
	    $act = Conexao::getConn()->prepare($sql);
	    $act->execute();
	    
	    if($act->rowCount() > 0){
	       $resultado = $act->fetchAll(\PDO::FETCH_ASSOC);
	       return $resultado;
	    }else{
	        return [];
	    }

	}

	public function update(Produto $p)
	{
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
        
        $act = Conexao::getConn()->prepare($sql);
        $act->bindValue(1, $p->getNome());
        $act->bindValue(2, $p->getDescricao());
        $act->bindValue(3, $p->getID());
        
        $act->execute();
        
	}

	public function delete($id)
	{
        $sql = 'DELETE FROM produtos WHERE id = ?';
        
        $act = Conexao::getConn()->prepare($sql);
        $act->bindValue(1, $id);
        $act->execute();
	}
}