<!DOCTYPE html>
<html>
<head>
	<title>Inasistencia</title>
</head>
<body>
<?php 
	include("conexion.php");

	$registros = mysqli_query($Conexion,"SELECT * from asistencia") or die("Problemas en el select:".mysqli_error($Conexion));
?>

<h1 class="text-center" >Inasistencias del alumno <?php echo "$_REQUEST[alumno]"; ?> </h1>
<table border="1px" class="table table-condensed">
	<tr>
	     <th>ID</th>
	     <th>Tipo</th>
	     <th>Hora</th>
	     <th>Dia</th>
	</tr>
	
	<?php

			while($reg=mysqli_fetch_array($registros))
			{
				echo "<tr>";
					echo "<td>" .$reg['id_alumno']."</td>";   //"<?php echo $reg['Apellido'];
					echo "<td>" .$reg['tipo']."</td>";
					echo "<td>" .$reg['hora']."</td>";
					echo "<td>" .$reg['dia']."</td>";
				echo "</tr>";
			}
			
		?>
		

		  	
</table>

</body>
</html>