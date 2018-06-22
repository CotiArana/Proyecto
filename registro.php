<!DOCTYPE html>
<html>
<head>
	<title>Inasistencia</title>
</head>
<body>
<?php 
	include("conexion.php");

	$registros = mysqli_query($Conexion,"SELECT id_alumno, sum(total) as total from asistencia group by id_alumno") 
	or die("Problemas en el select:".mysqli_error($Conexion));

?>

<h1 class="text-center" >Registro</h1>	

<table border="1px" class="table table-condensed">
	<tr>
	     <th>Alumno</th>
	     <th>Total</th>
	</tr>
	

	
	<?php
			while($reg=mysqli_fetch_array($registros))
			{
				echo "<tr>";
					echo "<td>" .$reg['id_alumno']."</td>";   //"<?php echo $reg['Apellido'];
					echo "<td>" .$reg['total']."</td>";
				echo "</tr>";
			}
		
		
	?>		  	
</table>

	<a href="buscar.php">Volver</a></li>


</body>
</html>