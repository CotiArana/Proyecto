<?php
    include 'conexion.php';  
 
    //pasamos id del país
    if(!empty($_POST["id_curso"])) 
    {
       echo "SELECT id, descripcion FROM cursos WHERE id_curso = $_POST["id_curso"]";
       $consulta_alumnos = $Conexion->query($sql);
 
       //construimos lista nueva dependiente
      ?>
      <option value="">Seleccionar Alumno</option>
      <?php
 
      while($alumno= $consulta_alumnos->fetch_object())
      {
	   ?>
	      <option value="<?php echo $alumno->id; ?>"><?php echo $alumno->descripcion; ?></option>
	   <?php
      }
    }
?>