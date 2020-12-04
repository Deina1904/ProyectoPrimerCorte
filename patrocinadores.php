<!DOCTYPE html>

<html lang="ES">
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
    <a class="navbar-brand" href="#">Registro Patrocinador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
    </div>
    </nav>

    <form method="post" > 
        <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">
                
            <hi>  EL MUNDO DEL CAPITAN AMERICA  </hi>       
                
            <br>
            <label style="margin-top: 2%;"> Nombre Completo </label>
            <br>
            <input class="form-control" type="text" name="nombrepatro" placeholder="&#128589 Nombre" required style="width: 50%;margin: auto;">
            <br>
            <label> N° Documento </label>
            <br>
            <input class="form-control" type="number" name="docpatro"  required style="width: 50%;margin: auto;">
            <br>
            <label> Nombre Grupo  </label>
            <br>
            <input class="form-control" type="text" name="namegrupo"  required  style="width: 50%;margin: auto;">
            <br>
              
            <br>
            <button class="btn btn-info" type="submit" name="registro"> Registrar Datos </button>
        </div>

            <?php 
                if(isset($_POST['registro'])){
                $con = mysqli_connect('localhost','root','','trabajo1');
                    // obtener los datos del formulario 
                $nombre = $_POST['nombrepatro'];
                $documento = $_POST['docpatro'];
                $nombreGrupo = $_POST['namegrupo'];

                $sqlTabla = "INSERT into patrocinadores (IdPatrocinador,Nombre,NoIdentificacion,NombreGrupo) 
                                                VALUES  ('','$nombre','$documento','$nombreGrupo')";

                $ejecutar = mysqli_query($con,$sqlTabla);
                    if($ejecutar == 1){
                        echo '<script language="javascript">alert("Registro Exitoso");</script>';
                        
                    }else{
                        echo '<script language="javascript">alert("Registro rechazado");</script>';
                    }
                }
            ?>
    </form>  
        
    <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                        <h2>Misiones registradas</h2>	
                        <thead class="text-center">
                            <th>AI</th>
                            <th>Lugar</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>    
                            <th colspan="2">Acciones</th> 
                        </thead>								
                        <tbody>
                            <?php
                                $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
                                    if ($conexion->connect_error) {
                                        echo "Error con la conexion";
                                        exit(); 
                                    }
                                    session_start();
                                $resu = mysqli_query($conexion , "SELECT * from patrocinadores");
                                    while ($consulta = mysqli_fetch_array($resu)) {
                            ?>
                            <tr>                  
                                <td ><?php echo $consulta ['IdPatrocinador']?></td>
                                <td ><?php echo $consulta ['Nombre']?></td>
                                <td ><?php echo $consulta ['NoIdentificacion']?></td>
                                <td ><?php echo $consulta ['NombreGrupo']?></td>

                                <td><a id="alink" href="f_mod_patro.php?id_m=<?php echo $consulta ['IdPatrocinador'] ?>">Modificar</a></td> 
                                <td><a id="alink" href="eli_patro.php?id_m=<?php echo $consulta ['IdPatrocinador'] ?>">Eliminar</a></td> 
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
</html> 