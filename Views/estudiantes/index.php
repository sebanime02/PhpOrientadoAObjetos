
<h3>VISTA DEL ESTUDIANTE PRINCIPAL </h3>

<?php 
	
	//$estudiantes = new Controllers\estudiantesController();
	$datos = $estudiantes->index();
	while($row = mysqli_fetch_array($datos))
	{
		echo $row['nombre'];
	}


 ?>