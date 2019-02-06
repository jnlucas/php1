<?php

namespace classes;

use classes\abstratas\Funcionario;

class GerenciadorBonificacao{

	public $totalBonificacao;

	public function registrar(Funcionario $funcionario){

		$this->totalBonificacao += $funcionario->getBonificacao();

	}


	public function getTotalBonificacao(){

		return $this->totalBonificacao;
	}
}
?>