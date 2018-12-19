<?php

namespace src\entity;

use src\Utils\Listas\ListInterface;


class Cliente implements ListInterface{


	private $nome;
	
	private $foto;
	
	private $idade;
	
	private $descricao;

	public function setNome($nome){

		$this->nome = $nome;
		return $this;
	}


	public function getNome(){

		return $this->nome;
	}

	public function setFoto($foto){

		$this->foto = $foto;
		return $this;
	}
	

	public function getFoto(){

		return $this->foto;
	}


	public function setIdade($idade){

		$this->idade = $idade;
		return $this;
	}
	

	public function getIdade(){

		return $this->idade;
	}


	public function setDescricao($descricao){

		$this->descricao = $descricao;
		return $this;
	}
	

	public function getDescricao(){

		return $this->descricao;
	}


	public function getFotografia(){

	}

	public function getDescricaoResumida(){
		
	}
	

}
?>