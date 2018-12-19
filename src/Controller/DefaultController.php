<?php

namespace src\Controller;

use src\Controller\Controller;

use src\Utils\Paginacao\Paginate;

use src\Utils\Serializer\SerializerEntity;


use src\entity\Cliente;

use src\repository\ClienteRepository;



class DefaultController extends Controller{
	


	public function indexAction(){

	
		$serializer = new SerializerEntity();

		$clienteRepository = new ClienteRepository();

		$data = $clienteRepository->findAll();

		$cliente = $serializer->deserialize($data, Cliente::class,'json');

		$paginate = new Paginate();

		$paginate->setSize(253)->setQuantidadePorPagina(20)->setPaginaAtual(2);

		//print_r($cliente); die();


		$this->render('default/index.html.twig', array(
			'paginate' => $paginate
		));

	}
}
