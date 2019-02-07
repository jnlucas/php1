<?php

namespace classes\abstratas;

abstract class Funcionario{


	public $nome;
	
	protected $cpf;
	
	protected $salario;

	static private $piso = 1000.00;
	



	public function __construct($cpf,$salario){

		$numberArgs = func_num_args(); 
		

		if($numberArgs == 1){
			$this->construtor1($cpf);
		} 
		elseif($numberArgs == 2){
			$this->construtor2($cpf,$salario);
		}
		
		
	}


	public function construtor1($cpf){
		$this->salario = Funcionario::$piso;
		$this->cpf = $cpf;
	}
	
	public function construtor2($cpf,$salario){

		$this->cpf = $cpf;
		$this->salario = $salario;
	}

	

	abstract public function getBonificacao();


	abstract  protected function AumentarSalario();

}

?>