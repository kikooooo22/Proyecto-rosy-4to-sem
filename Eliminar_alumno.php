<html>

    <body>
        <?php
            include 'header.php';
            require('conexion.php');
            $No_lista=$_GET['No_lista'];
            
            $query="DELETE FROM alumno WHERE No_lista='$No_lista'";
            $resultado=$mysqli->query($query);
        ?>
        <br><br>
        <div align="center">
        
            <?php if($resultado>0){?>

            <div aling="center">
                <h1 class="h1 text-success">Borrado con éxito</h1>
            </div>

            <?php } else {?>

            <div aling="center">
                <h1 class="h1 text-danger">No se ha podido borrar el registro</h1>
            </div>

            <?php } ?>

            <a href="alumnos.php">
                <input type="submit" value="Regresar" class="btn btn-primary">
            </a>
        
        </div>
        
    </body>

</html>
