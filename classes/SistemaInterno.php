<?php


namespace classes;

use classes\interfaces\Autenticavel;
class SistemaInterno{
	public function logar(Autenticavel $funcionario,$senha){

		$autenticado = $funcionario->Autenticar($senha);

		if($autenticado){

			echo "bem vindo ao sistma";
		}else{
			echo "senha errada";
		}

	}
}
?>