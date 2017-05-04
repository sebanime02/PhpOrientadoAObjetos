
<div class="box-principal">
<h3 class="titulo">Listado de Secciones<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de secciones</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Nombre</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>

		  	<?php 
		  	$secciones = new Controllers\seccionesController();
		  	
		  	foreach ($datos as $data) { ?>
		  	<tr>
		  			<td><?php echo $data['id']; ?></a></td>
			    	<td><?php echo $data['nombre']; ?></td>
			    	
			    	<td>
			    	<a class="btn btn-warning" href="<?php echo URL; ?>secciones/editar/<?php echo $data['id']; ?>">Editar</a>
					
					<a class="btn btn-danger" href="<?php echo URL; ?>secciones/eliminar/<?php echo $data['id']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>

	
		
	


 ?>