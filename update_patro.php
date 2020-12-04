<?php

	$IdPatrocinador=$_POST['IdPatrocinador'];

    $nombre = $_POST['nombrepatro'];
    $documento = $_POST['docpatro'];
    $nombreGrupo = $_POST['namegrupo'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="UPDATE patrocinadores SET Nombre='$nombre',NoIdentificacion='$documento',NombreGrupo='$nombreGrupo' WHERE id_m =$IdPatrocinador";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: patrocinadores.php");
	
 ?>
