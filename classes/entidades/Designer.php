<?php

namespace classes\entidades;

use classes\abstratas\Funcionario;


class Designer extends Funcionario{



	public function getBonificacao(){

		return $this->salario * 0.2;
	}



	public function AumentarSalario(){

		$this->salario *= 1.01;

	}

}
?>