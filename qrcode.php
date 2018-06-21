	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	
	
	<?php
	//include "phpqrcode/qrlib.php";
	//QRcode::png($_POST['text1']);
	//QRcode::png("AAAA");
	$alumno=$_POST['text1'];
	 echo ' <img src="https://api.qrserver.com/v1/create-qr-code/?data=http://10.200.168.213/proyecto/presenteM.php?id_alumno=';
	 echo $alumno;
	 echo '&amp;size=100x100" alt="" title="HELLO" />';
	?>
</body>
	</html>