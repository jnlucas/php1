<?php

namespace classes\abstratas;

use classes\interfaces\Autenticavel;

use classes\abstratas\Funcionario;



abstract class FuncionarioAutenticavel extends Funcionario implements Autenticavel {

	public $senha;
	
	

	public function Autenticar($senha){

		return $this->senha == $senha;
	}
}
?>