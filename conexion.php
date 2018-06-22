<?php
$Conexion = mysqli_connect("127.0.0.1", "root", "", "asistenciaescuela");
if(mysqli_connect_error())
	{
		echo"No se puedo conectar a base de datos: " . mysqli_connect_errno();
	}

     $Conexion->query("SET NAMES 'utf8'");  
?>