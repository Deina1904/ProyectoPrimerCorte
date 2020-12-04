<!DOCTYPE html>
<html>
<head>
    <title> Mundo Capitan America </title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type"> <meta content="utf-8" http-equiv="encoding">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:50px;margin-top: 50px;margin-right: 50px;margin-left: 50px;">
        <h1>Patrociandores</h1> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-right: 50px;margin-left: 50px;">
        <a class="navbar-brand" href="#">Modificar Enemigos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav> 
    <?php
        $ide=$_REQUEST['id_e'];
        $value = " Actual";  
		$conexionn=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
            if ($conexionn->connect_error) {    
                echo "Error";
                exit();
            }
		$resu = mysqli_query($conexionn,"SELECT * FROM enemigos WHERE id_e= '$ide'");
		$consulta = mysqli_fetch_array($resu); 
							
    ?>
    
    <form  action="update_e.php?id_e=<?php echo $consulta ['id_e']; ?>" method="post">
        <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">
            <h2>Enemigos</h2> 
            <br>
            <label style="margin-top: 2%;"> Nombre Completo </label>
            <br>
	        <input class="form-control text-center"type="Text" placeholder="&#128589 Nombre" name="nomb_s" value="<?php echo $consulta['nombre'];?>" required style="width: 50%;margin: auto;">
	        <label> N° Documento </label>
            <br>
            <input class="form-control text-center" type="Text" placeholder="Origen" name="origen" value="<?php echo $consulta['origen'];?>"style="width: 50%;margin: auto;">
            <br>
            <label for="sel1"> Nivel de amenaza</label>
            <br>
            <div class="form-group">
                <select class="form-control"  name="nivel_a" required value="<?php echo $consulta['nivel_a'];?>" required value style="width: 50%;margin: auto;">
                    <option value="<?php echo $consulta['nivel_a'];?>"><?php echo $consulta['nivel_a'] ?></option>
                    <option value="Media">Es un pete</option>
                    <option value="Normal">Normal</option>
                    <option value="Alta">Alta</option>
                </select>   
                <br>
                <button class="btn btn-info" type="submit" name="boton"> Editar </button> 
            </div>
        </div>   
    </form>

    <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                        <h2>Enemigos registrados</h2>
                        <thead class="text-center">
                            <th>AI</th>
                            <th>Nombre</th>
                            <th>Origen</th>
                            <th>Nivel de amenaza</th>
                            <th colspan="1">Acciones</th>  
                        </thead>
                        <tbody>
                            <?php
                                $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
                                    if ($conexion->connect_error) {
                                        echo "Error con la conexion";
                                        exit(); 
                                    }
                                    session_start();
                                $resu = mysqli_query($conexion , "SELECT * from enemigos");
                                    while ($consulta = mysqli_fetch_array($resu)) {
                                ?>
                                <tr>                  
                                    <td ><?php echo $consulta ['id_e']?></td>
                                    <td ><?php echo $consulta ['nombre']?></td>
                                    <td ><?php echo $consulta ['origen']?></td>
                                    <td ><?php echo $consulta ['nivel_a']?></td>
                                    <td><a id="alink" href="eli_e.php?id_e=<?php echo $consulta ['id_e'] ?>">Eliminar</a></td> 
                                </tr>

                                <?php 

                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

        