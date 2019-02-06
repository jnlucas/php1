<?php

namespace classes\abstratas;

abstract class Funcionario{


	public $nome;
	
	protected $cpf;
	
	protected $salario;
	



	public function __construct($cpf,$salario){

		$this->cpf = $cpf;
		$this->salario = $salario;

	}

	abstract public function getBonificacao();


	abstract  protected function AumentarSalario();

}

?>