<?php

namespace app\config;

abstract class DatabaseAbstract{


	abstract protected function connect($host,$username,$password,$dbname);

}