<?php

require_once "Config/Autoload.php";

Config\Autoload::run();

$est= new Models\Estudiantes();

$est->set("id", 1); 

$datos = $est->view();

print $datos;




?>