<?php
include 'header.php';
include 'footer.php';
require("conexion.php");
$query = "SELECT No_lista, Nombre, Apellido_pat, Apellido_mat FROM alumno";
$resultado= mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

?>

<html>
    
    <body>
        <br>
        <div class="">
            <div align="center" class="card">
                <div class="card-header">Dar de Alta:</div>
                <form method="get" action="alumnos_altas.php" class="form p-2">
                    <label for="No_lista" class="form-label">Nunmero de Lista:</label>
                    <input type="text" name="No_lista" class="texto" placeholder="01">
                    <label for="Nombre" class="form-label">Nombre:</label>
                    <input type="text" name="Nombre" class="texto" placeholder="Nombre">
                    <label for="Apellido_pat" class="form-label">Apellido Paterno:</label>
                    <input type="text" name="Apellido_pat" class="texto" placeholder="Paterno">
                    <label for="Apellido_mat" class="form-label">Apellido Materno:</label>
                    <input type="text" name="Apellido_mat" class="texto" placeholder="Materno">
                    <input type="submit" value="Dar de alta" class="btn btn-primary">

                </form>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                Lista de alumnos
            </div>
            <div class="p-4">
                <table class="table align-middle table-bordered">
                    <thead>
                    <tr class="table-dark">
                        <td align="center" class="titulotabla"><b>N° de Lista</b></td>
                        <td align="center" class="titulotabla"><b>Nombre</b></td>
                        <td align="center" class="titulotabla"><b>Apellido paterno</b></td>
                        <td align="center" class="titulotabla"><b>Apellido materno</b></td>
                        <td align="center" class="titulotabla"><b>Modificar</b></td>
                        <td align="center" class="titulotabla"><b>Eliminar</b></td>
                    </tr>
                    </thead>

                    <tbody align="center">

                    <?php while ($row=mysqli_fetch_array($resultado)){ ?>

                        <tr>
                            <td><?php echo $row['No_lista']?></td>
                            <td><?php echo $row['Nombre']?></td>
                            <td><?php echo $row['Apellido_pat']?></td>
                            <td><?php echo $row['Apellido_mat']?></td>
                            <td>
                                <a href="Modificar_alumno.php?No_lista=<?php echo $row['No_lista'] ?>">
                                    <input type="submit" value="Modificar" class="btn btn-warning">
                                </a>
                            </td>
                            <td>
                                <a href="Eliminar_alumno.php?No_lista=<?php echo $row['No_lista'] ?>">
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>

</html>
