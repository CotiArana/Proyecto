	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form method="GET">
	<?php
	//Agregamos la libreria para genera códigos QR
	require "phpqrcode/qrlib.php";    
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = 'temp/';
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
    $time = time();

    $id = $_POST['text1'];

    //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'test.png';
    //Parametros de Condiguración
	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = "http://192.168.1.104/proyecto/presenteM.php?id_ alumno=$id";//date("d-m-Y (H:i:s)", (strtotime ("-5 Hours")))
	//$contenidoid = $id;
	
    //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	//Mostramos la imagen generada
	echo '<img src="'.$dir.basename($filename).'" /><hr/>';  
?>
</form>

	
</body>
	</html>