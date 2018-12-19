<?php

namespace app\config;

class Database{

	protected $db;

	private $host;
	
	private $username;
	
	private $password;
	
	private $dbname;


	public function __construct($host = null,$username = null,$password = null,$dbname = null){

		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;

		$this->connect();


	}


	private function connect(){


		try {
		  $this->db = new \PDO("mysql:host={$this->host};dbname={$this->dbname}", $username, $password);
		  $$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		   
		} catch(\PDOException $e) {
		  echo 'Error: ' . $e->getMessage();

		}

		return $this->db;
	}
}