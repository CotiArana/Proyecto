<!DOCTYPE html>
<html lang="es">
   <?php
      include 'conexion.php';
    ?>
    <head>	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>	
    <body>
        <!--  Este script se lanza cada vez que se selecciona una opción en la lista de países y se encarga de enviar el id del 
              país al archivo get_ciudad.php (Archivo 3), este archivo que lo veremos después se encargará de generar una nueva 
              lista de ciudades dependiendo del id seleccionado de país, una vez creada la lista se sustituirá sobre la lista 
              actual de nuestro archivo index  -->
	
    <form action="falta_alumno.php" method="GET">
		<script>
		     function obtenerAlumnos(val) 
		     {
			$.ajax
			({
			    type: "GET",
			    url: "get_alumno.php",
			    data:'id_curso='+val,
			    success: function(data)
			    {
				$("#lista_alumnos").html(data);
			    });
			}
		</script>

		<?php
		    $consulta_cursos   = $Conexion->query("SELECT id as 'valor', descripcion as 'descripcion' from cursos order by descripcion");
		    $consulta_alumnos  = $Conexion->query("SELECT id as 'valor', descripcion as 'descripcion' from alumnos order by descripcion");
		?>
		<div class="form-group col-md-3">
		    <label>Cursos:</label>
		    <select name="curso" class="form-control" id="lista_cursos" onChange="obtenerAlumnos(this.value);">
			<option value=''>Seleccionar Curso</option>
			<?php		
			    while($row= $consulta_cursos->fetch_object())
			    {
				echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
			    }
			?>
	            </select>
	        </div>
	 
		<div class="form-group col-md-6">
		    <label>Alumno:</label>					
		    <select name="alumno" id="lista_alumnos" class="form-control">
			<option value=''>Seleccionar Alumno</option>
			<?php
			      while($row= $consulta_alumnos->fetch_object())
			      {
				   echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
			      }
			?>
		    </select>
		</div>
	 
			<input class="btn btn-primary btn-block" type="submit" value="Buscar">

	        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	</form>
		<br>
	<form action="registro.php" method="GET">
			<input class="btn btn-primary btn-block" type="submit" value="Registro Total">
	</form>
   </body>
</html>