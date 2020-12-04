<?php

	$idEquipo=$_POST['idEquipo'];

    $nombre = $_POST['nombreEquipo'];
    $documento = $_POST['docEquipo'];
    $poder = $_POST['poderCompañero'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="UPDATE colegasequipo SET Nombre='$nombre',NoIdentificacion='$documento',Poder='$poder' WHERE idEquipo =$idEquipo";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: equipo.php");
	
 ?>
