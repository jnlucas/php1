<?php

namespace classes\entidades;

use classes\abstratas\FuncionarioAutenticavel;


class Diretor extends FuncionarioAutenticavel{

	
	
	public function getBonificacao(){


		return $this->salario * 0.5;
	}



	public function AumentarSalario(){

		$this->salario *= 1.15;

	}

}
?>