<?php namespace Views;

	$template = new Template();
	class Template
	{
		public function __construct()
		{
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Administración de Estudiantes</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
	</head>
	<body>
	
	
<?php 
		}
		public function __destruct()
		{
?>
	</body>
	</html>
<?php 
		}
	}

?>