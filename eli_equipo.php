<?php

	$idEquipo=$_REQUEST['idEquipo'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="DELETE FROM colegasequipo  WHERE idEquipo =$idEquipo";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: equipo.php");
	
 ?>
