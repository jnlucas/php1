<?php

namespace app\config;

interface ControllerInterface{

	public function init($template);

	public function render($response,$params);
}


?>