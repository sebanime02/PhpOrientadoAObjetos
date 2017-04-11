<?php namespace Models;

	class Estudiantes
	{
		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $id_seccion;
		private $fecha;
		private $con;

		public function __construct()
		{
			$this->con = new Conexion();
		}
		public function set($atributo, $contenido)
		{
			$this->$atributo = $contenido;

		}
		public function get($atributo)
		{
			return $this->$atributo;
		}

		public function hola()
		{
			echo "HOLA";
			echo $this->id;
		}

		public function getNames()
		{
			$sql = "SELECT * FROM estudiantes";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}



		public function listar()
		{
			$sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.idsection = t2.id";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		public function add()
		{
			$sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, idsection, fecha) VALUES (null, '{$this->nombre}','{$this->edad}','{$this->promedio}'.'{$this->imagen}','{$this->id_seccion}', NOW())";

			$this->con->consultaSimple($sql);

		}

		public function delete()
		{
			$sql = "DELETE from estudiantes WHERE id ='{$this->id}'";
			$this->con->consultaSimple($sql);
		}
		public function edit()
		{
			$sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', edad ='{$this->edad}', promedio='{$this->promedio}', idsection = '{$this->id_seccion}'";
			$this->con->consultaSimple($sql);
		}
		public function view()
		{
			//$sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.idsection = t2.id WHERE id = '{$this->id}' ";
			$sql="SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion= t2.id WHERE t1.id=1 ";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row['nombre'];
		}


	}

?>