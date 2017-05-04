<?php namespace Controllers;

use Models\Estudiantes as Estudiante; //Sobrenombre "Estudiante" para el modelo
use Models\Seccion as Seccion;


class estudiantesController
{
	private $estudiante;
	private $seccion;


	public function __construct()
	{
		$this->estudiante = new Estudiante(); //Objeto del modelo
		$this->seccion = new Seccion();
	}
	public function index()
	{
		$datos = $this->estudiante->listar();
		return $datos;
	}
	
	public function agregar()
	{
		if(!$_POST)
		{
			$datos = $this->seccion->listar();
			return $datos;
		}else
		{
			$permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
			$limite = 700;
			if(in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']['size']<=$limite*1024)
			{
				$nombre = date('i-s') . $_FILES['imagen']['name'];
				$ruta = "Views".DS ."template".DS."imagenes".DS."avatars".DS.$nombre;
				move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta); //Codigo para mover imagen localmente
				$this->estudiante->set("nombre",$_POST['nombre']);
				$this->estudiante->set("edad",$_POST['edad']);
				$this->estudiante->set("promedio",$_POST['promedio']);
				$this->estudiante->set("imagen",$nombre);
				$this->estudiante->set("id_seccion",$_POST['id_seccion']);
				$this->estudiante->set("imagen",$nombre);
				$this->estudiante->add();
				header("Location:".URL."estudiantes");

			}
		}
		
	
	}
	public function editar($id){
		if(!$_POST)
			{
				$this->estudiante->set("id", $id);
				$datos = $this->estudiante->view();
				return $datos;
		}
		else
			{
				$this->estudiante->set("id", $id);
				$this->estudiante->set("nombre", $_POST['nombre']);
				$this->estudiante->set("edad", $_POST['edad']);
				$this->estudiante->set("promedio", $_POST['promedio']);
				$this->estudiante->set("id_seccion", $_POST['id_seccion']);
				$this->estudiante->editar();
				header("Location: " . URL . "estudiantes");
			}
		}
	public function listarSecciones()
	{
		$datos = $this->seccion->listar();
		return $datos;
	}

	public function ver($id)
	{
		$this->estudiante->set("id", $id);
		$datos = $this->estudiante->view();
		return $datos;
	}
	public function eliminar($id)
	{
		$this->estudiante->set("id", $id);
		$datos = $this->estudiante->delete();
		header("Location: ".URL."estudiantes");
	}


}
	$estudiantes = new estudiantesController(); //Puede utilizarse el objeto en contexto general

?>