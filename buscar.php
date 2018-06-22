<!DOCTYPE html>
<html lang="es">
   <?php
      include 'conexion.php';
    ?>
     <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Main page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style type="text/css">
        	.black{
        		background.color: black;
        	}
        	.orange{
        		background-color: orange;
        		
        	}
        	p {
        		color: orange;
        	}
        	#mediano{
        		font-size: 25px;
        	}
        	#pequeño{
        		font-size: 20px;
        	}
        </style>
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
		?><section id="home" class="black">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center">
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <!--<h3>Bienvenido a</h3>
                                                <h1>PHOTOASSIST</h1>
                                                <div class="separator"></div>
                                                <p id="mediano">Desea...</p>
                                                <div class="home_btn">
                                                    <a href="Prof_Alu.html" class="btn btn-lg m_t_10">Registrarse</a>
                                                    <a href="Inicio.html" class="btn btn-lg m_t_10">Iniciar sesion</a>
                                                </div>-->

		<!--<div class="form-group col-md-3">-->
		    <p id="mediano">Cursos:</p>
		    <select name="curso" class="form-control"  style="width:200px" id="lista_cursos" onChange="obtenerAlumnos(this.value);">
			<option value=''>Seleccionar Curso</option>
			<?php		
			    while($row= $consulta_cursos->fetch_object())
			    {
				echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
			    }
			?>
	            </select><br><br>
	        <!--</div>-->
	       <!--<div class="form-group col-md-6">-->
		    <p id="mediano">Alumno:</p>					
		    <select name="alumno" id="lista_alumnos"  style="width:200px" class="selectpicker" data-live-search="true">
			<option value=''>Seleccionar Alumno</option>
			<?php
			      while($row= $consulta_alumnos->fetch_object())
			      {
				   echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
			      }
			?>
		    </select><br><br>
		<!--</div>-->
		<input class="btn btn-lg m_t_10" type="submit" value="Buscar">

	        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	</form>
		<br>
	<form action="registro.php" method="GET">
			<input class="btn btn-lg m_t_10" type="submit" value="Registro Total">
	</form>

                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
	 
		
	 
			
   </body>
</html>