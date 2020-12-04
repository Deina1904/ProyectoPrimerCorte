<?php

	$ide=$_REQUEST['id_e'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="DELETE FROM enemigos  WHERE id_e =$ide";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: enemigo.php");
	
 ?>
