<?php

namespace src\Controller;

use src\Controller\Controller;

class DefaultController extends Controller{
	


	public function indexAction(){

	
	$this->render('default/index.html.twig', array(
		'name' => 'joao'
	));

	}
}
