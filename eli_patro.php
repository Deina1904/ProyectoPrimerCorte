<?php

	$IdPatrocinador=$_REQUEST['IdPatrocinador'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="DELETE FROM patrocinadores  WHERE IdPatrocinador =$IdPatrocinador";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: patrocinadores.php");
	
 ?>
