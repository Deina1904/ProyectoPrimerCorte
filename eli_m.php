<?php

	$ide=$_REQUEST['id_m'];

    $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
    
	$consulta="DELETE FROM mision WHERE id_m =$ide";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: mision.php");
	
 ?>
