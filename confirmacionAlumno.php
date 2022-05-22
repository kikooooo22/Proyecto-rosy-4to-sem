<html>
    <body>
        <?php
            include 'header.php';
            $No_lista=$_GET["No_lista"];
        ?>
        <div align="center">
            <h1 class="h1 display-2">¿Esta seguro de borrar este alumno?</h1><br>
            <a href="Eliminar_alumno.php?No_lista=<?php echo $No_lista?>"><input type="button" value="SI" class="btn btn-success"></a>
            <a href="alumnos.php"><input type="button" value="NO" class="btn btn-danger"></a>
        </div>
    </body>
</html>