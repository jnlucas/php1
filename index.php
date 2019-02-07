<?php
ini_set('display_errors',1);

require_once "autoload.php";


use classes\entidades\Diretor;
use classes\entidades\Designer;
use classes\SistemaInterno;
use classes\GerenciadorBonificacao;


$sistemaInterno = new SistemaInterno();
$gerenciadorBonificacao = new GerenciadorBonificacao();


echo "<pre>";

$diretor = new Diretor('36131357870',15500.00);
$diretor->nome = "Joao";
$diretor->senha = "Palmeiras nao tem mundial";



$designer = new Designer('35893942850');
$designer->nome = "Maria";


$sistemaInterno->logar($diretor,'Palmeiras nao tem mundial');
//$sistemaInterno->logar($designer,'abcd');


print_r($designer);

print_r($diretor);


$gerenciadorBonificacao->registrar($diretor);



echo $gerenciadorBonificacao->getTotalBonificacao();





?>

