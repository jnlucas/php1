<?php
ini_set('display_errors',1);

require_once "autoload.php";


use classes\entidades\Diretor;

$diretor = new Diretor();

echo "<pre>";
print_r($diretor->getBonificacao());


?>

