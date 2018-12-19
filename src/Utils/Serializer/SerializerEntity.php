<?php

namespace src\Utils\Serializer;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


final class SerializerEntity{


	public $serializer; 

	private $return;
	
	private $type;
	
	private $class;


	public function __construct(){

		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());

		$this->serializer = new Serializer($normalizers, $encoders);

	}


	public function deserialize($data,$class,$type = 'json'){


		$this->class = $class;
		$this->type = $type;

		if(is_array(json_decode($data))){

			
			$this->return = array_map(function($data){

				$data = json_encode($data);

				return $this->serializer->deserialize($data, $this->class, $this->type);

			},json_decode($data));

		}else{
			$this->return = $this->serializer->deserialize($data, $class, $type);	
		}

		print_r($this->return); die();

		
	}


	private function deserializeArray($data,$class,$type = 'json'){

		echo "Oi";  die();

		return  $this->serializer->deserialize($data, $class, $type);
	}
}

?>