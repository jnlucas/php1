<?php

namespace src\Controller;

use src\Controller\Controller;

use src\Utils\Paginacao\Paginate;

class DefaultController extends Controller{
	


	public function indexAction(){

	

	$paginate = new Paginate();

	$paginate->setSize(253)->setQuantidadePorPagina(20)->setPaginaAtual(2);

	

	$this->render('default/index.html.twig', array(
		'paginate' => $paginate
	));

	}
}
