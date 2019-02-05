<?php

namespace classes\abstratas;

abstract class Funcionario{


	private $nome;
	
	private $cpf;
	
	private $email;
	
	private $telefone;


	abstract public function getBonificacao();


	abstract  protected function getSalario();

}

?>