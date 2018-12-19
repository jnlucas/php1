<?php

namespace src\Controller;
use app\config\ControllerInterface;


class Controller implements ControllerInterface{


	private $twig;

	public function init($twig){

		$this->twig = $twig;

	}


	public function render($response,$params){

		print $this->twig->render($response, $params);
	}
}
