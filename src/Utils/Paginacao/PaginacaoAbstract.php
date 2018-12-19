<?php
namespace src\Utils\Paginacao;

abstract class PaginacaoAbstract {

	abstract public function setSize($size);

	abstract public function setQuantidadePorPagina($quantidadePorPagina) ;

	abstract public function setPaginaAtual($paginaAtual) ;

	
	abstract public function getQuantidadeDePaginas();




}
?>