<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)). DS);
define('URL', "http://localhost/phpPOO/PhpOrientadoAObjetos/");

require_once "Config/Autoload.php";

$autoload = new Config\Autoload;
$autoload->run();

/*
$est= new Models\Estudiantes();
$est->set("id", 1); 
$datos = $est->view();
	
print $datos['nombre'];
*/
require_once "Views/template.php";//Cargar la cabecera del HTML
Config\Enrutador::run(new Config\Request());





?>