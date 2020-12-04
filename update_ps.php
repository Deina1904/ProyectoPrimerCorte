<?php

	$ide=$_REQUEST['id_ps'];

    $lugar = $_REQUEST['nomb_s'];
    $edad = $_REQUEST['edad_s'];
    $mision = $_REQUEST['mision_s'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="UPDATE personas_s SET nombre='$lugar',edad='$edad',mision_s='$mision' WHERE id_ps =$ide";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: personas.php");
	
 ?>
