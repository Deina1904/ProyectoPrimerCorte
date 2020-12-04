<?php

	$idAliados=$_REQUEST['idAliados'];

    $nombre = $_POST['nombreAliado'];
    $documento = $_POST['docAliado'];
    $superPoder = $_POST['poderAliado'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="UPDATE aliados SET Nombre='$nombre',NoIdentificacion='$documento',SuperPoder='$superPoder' WHERE idAliados =$idAliados";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: aliados.php");
	
 ?>