<?php

	$idAliados=$_REQUEST['iidAliadosd_e'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="DELETE FROM aliados  WHERE idAliados =$idAliados";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: aliados.php");
	
 ?>
