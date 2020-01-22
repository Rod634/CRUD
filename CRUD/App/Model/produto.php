<?php

namespace App\Model;

class Produto 
{
	private $nome, $descricao, $id;

	public function getID()
	{
		return $this->id;
	}
    
	public function setId($valor)
	{
	   $this->id = $valor;    
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setNome(String $nome)
	{
		$this->nome = $nome;
	}

	public function setDescricao(string $descricao)
	{
		$this->descricao = $descricao;
	}
}

