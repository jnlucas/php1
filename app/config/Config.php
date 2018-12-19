<?php

namespace app\config; 

use app\config\Database;

class Config extends DatabaseAbstract{

	private $twig;
	
	protected $request;	
	
	protected $db;	



	public function __construct($template,$request){

		$this->twig = $template;
		$this->request = $request;
		$this->init();
	}


	/**
	*
	* Inicia nosso pequeno projeto carregando os controller e as views
	* 
	**/
	private function init(){

		$url = explode("/",$this->request['p']);

		$controller = "src\\Controller\\".ucfirst($url[0])."Controller";		
		$controller = new $controller();
		
		$view = (isset($url[1]))? $url[1]."Action": "indexAction";

		call_user_func_array(array($controller, 'init'), array($this->twig));
		
		call_user_func_array(array($controller, $view), array());

		
	}

	public function connect($host,$username,$password,$dbname){

		$this->db = new Database($host,$username,$password,$dbname);

	}

	

}