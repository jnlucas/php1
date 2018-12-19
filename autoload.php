<?php

function load($namespace) {
    
    $namespace = str_replace("\\", "/", $namespace);
    
    $fullpath = __DIR__."/" . $namespace . '.php';

    return include_once($fullpath);
    return true;
}

spl_autoload_register(__NAMESPACE__ . '\load');

require_once __DIR__.'/vendor/autoload.php';

?>