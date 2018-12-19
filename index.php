<?php
ini_set('display_errors',1);

require_once "autoload.php";

use app\config\Config;

$loader = new Twig_Loader_Filesystem(__DIR__.'/src/views');
$twig = new Twig_Environment($loader, array(
    
));

$config = new Config($twig,$_GET);


?>

