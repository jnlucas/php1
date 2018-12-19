<?php

namespace src\Utils\Paginacao;



class Paginate extends PaginacaoAbstract{

	protected $size;
	
	protected $quantidadePorPagina;
	
	protected $quantidadeDePaginas;
	
	public $paginaAtual;



	public function setSize($size){

		$this->size = $size;
		return $this;

	}

	public function setQuantidadePorPagina($quantidadePorPagina){
		$this->quantidadePorPagina = $quantidadePorPagina;
		return $this;

	}

	
	public function setPaginaAtual($paginaAtual){

		$this->paginaAtual = $paginaAtual;
		return $this;

	}


	

	public function getQuantidadeDePaginas(){

		$this->quantidadeDePaginas = ceil($this->size / $this->quantidadePorPagina);
		
		return $this->quantidadeDePaginas;


	}





	public function __toString(){

		$quantidade = $this->quantidadePorPagina;

		if($this->paginaAtual == $this->getQuantidadeDePaginas()){

		 	$quantidade = $this->size - (($this->paginaAtual-1) * $this->quantidadePorPagina); 
		}
		elseif($this->paginaAtual > $this->getQuantidadeDePaginas()){
			$quantidade = 0;
		}
		return "Exibindo {$quantidade} de {$this->size}";

	}




}
