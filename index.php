<?php
set_include_path(
	'../Validation/library'
	. PATH_SEPARATOR . get_include_path()
);
require_once 'SplClassLoader.php';
$respectLoader = new \SplClassLoader();
$respectLoader->register();


//use Respect\Validation\Validator as v;
$number = 123;
//$teste = v::numeric()->validate($number); //true
$teste = Respect52_Validation_Validator::numeric()->validate($number); //true

var_dump($teste);

//$teste = Respect52_Validation_Validator::primeNumber()->validate($number); //true

//var_dump($teste);