<?php
    include 'header.php';
	require('conexion.php');
    $id=$_GET['id'];
	$No_lista=$_GET['No_lista'];
    $No_lista = intval($No_lista);
	$Nombre=$_GET['Nombre'];
	$Apellido_pat=$_GET['Apellido_pat'];
	$Apellido_mat=$_GET['Apellido_mat'];
	$query="UPDATE alumno SET No_lista='$No_lista', Nombre='$Nombre', Apellido_pat='$Apellido_pat', Apellido_mat='$Apellido_mat'
    WHERE No_lista='$id'";
	$resultado=$mysqli->query($query);	

?>

<html>

    <body>
        <br><br>
        <div align="center">
        
            <?php if($resultado>0){?>

            <div aling="center">
                <h1 class="h1 text-success">Modificado con éxito</h1>
            </div>

            <?php } else {?>

            <div aling="center">
                <h1 class="h1 text-danger">No se ha podido modificar el registro</h1>
            </div>

            <?php } ?>

            <a href="alumnos.php">
                <input type="submit" value="Regresar" class="btn btn-primary">
            </a>
        
        </div>
        
    </body>

</html>
