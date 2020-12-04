<?php

	$ide=$_REQUEST['id_ps'];

    $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
    
	$consulta="DELETE FROM personas_s WHERE id_ps =$ide";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: personas.php");
	
 ?>
