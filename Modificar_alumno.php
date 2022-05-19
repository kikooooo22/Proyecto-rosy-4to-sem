<?php
    include 'header.php';
	require('conexion.php');	
	$No_lista=$_GET['No_lista'];
    $id=$No_lista;

    $query="start transaction";
	$query="SELECT No_lista, Nombre, Apellido_pat, Apellido_mat FROM alumno WHERE No_lista='$No_lista'";
	$resultado=$mysqli->query($query);	
	$row=mysqli_fetch_array($resultado);	

?>

<html>

    <body>
    <div class="row">
        <div class="col-md-4"></div>
        <div align="center" class="col-md-4 p-1">
            <div class="card p-2">
                <div class="card-header">Datos</div>
                <form method="get" action="Modi_alumno.php" >
                    <table>
                        <!-- Para poder pasar el numero de lista antiguo y evitar errores de variables-->
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <tr>
                            <td>
                                <p>Número de lista: </p>
                            </td>
                            <td>
                                <input type="text" name="No_lista" class="texto" value="<?php echo $row['No_lista']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>Nombre: </p>
                            </td>
                            <td>
                                <input type="text" name="Nombre" class="texto" value="<?php echo $row['Nombre']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>Apellido paterno: </p>
                            </td>
                            <td>
                                <input type="text" name="Apellido_pat" class="texto" value="<?php echo $row['Apellido_pat']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>Apellido materno: </p>
                            </td>
                            <td>
                                <input type="text" name="Apellido_mat" value="<?php echo $row['Apellido_mat']; ?>">
                            </td>
                        </tr>

                    </table>
                    <br>
                    <input type="submit" value="Guardar cambios" class="btn btn-success">
                    <br><br>
                    <a href="alumnos.php">
                        <input type="button" value="Regresar" class="btn btn-danger">
                    </a>

                </form>

            </div>
        </div>
    </div>
    </body>

</html>
