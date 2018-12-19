<?php
namespace src\repository;


class ClienteRepository{


	public function findAll(){

		$data =  (file_get_contents(__DIR__.'/clientes.json'));

		return ($data); 
	}
}
?>