<?php namespace Controllers;

use Models\Estudiantes as Estudiante; //Sobrenombre "Estudiante" para el modelo
class estudiantesController
{
	private $estudiante;

	public function __construct()
	{
		$this->estudiante = new Estudiante(); //Objeto del modelo

	}
	public function index()
	{
		$datos = $this->estudiante->listar();
		return $datos;
	}


}
	$estudiantes = new estudiantesController(); //Puede utilizarse el objeto en contexto general

?>