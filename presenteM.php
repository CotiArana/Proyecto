<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include("conexion.php");

	$hora = date("'h:i:s'");
	$dia  = date("'Y-m-d'");
	$alumno = $_GET['id_alumno'];

	$registros = mysqli_query($Conexion,"INSERT INTO asistencia (id_alumno, tipo, dia, hora) VALUES ($alumno, 'FALTA', $dia, $hora)") or die("Problemas en el select:INSERT INTO asistencia (id_alumno, tipo, dia, hora) VALUES ($alumno, 'FALTA', $dia, $hora)".mysqli_error($Conexion));

?>




</body>
</html>