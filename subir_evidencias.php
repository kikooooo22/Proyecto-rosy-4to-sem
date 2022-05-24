<html>
    <head>
        <?php
            include 'header.php';
            $conexion=mysqli_connect("localhost","root","","school");
            $queryT="SELECT * FROM trabajo";
            $res=mysqli_query($conexion,$queryT);
            $queryE="SELECT * FROM evidencia";
            $res2=mysqli_query($conexion, $queryE);
        ?>
    </head>
    <body>
        <br>
        <div class="container" align="middle">
            <form method="get">
                <div class="form-group">
                    <label class="text-dark">Elige un trabajo:</label><br>
                    <select name="trabajo">
                        <option value="">Elige una opción</option>
                        <?php
                            while($row=mysqli_fetch_array($res)){
                                ?>
                        <option value=<?php $temp=$row['idTrabajo']?>><?php echo($row['Nom_trabajo'])?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Elegir">
                </div>
            </form>
        </div>
        <br>
        <div class="container">
            <table class="table table-bordered">
                <thead class="table-dark">
                <tr>
                    <td>ID Trabajo</td>
                    <td>No. Lista</td>
                    <td>Calificacion</td>
                    <td>Subir</td>
                    <td>Guardar</td>
                    <td>Ver</td>
                </tr>
                </thead>
                <tbody>
                <?php while($reg=mysqli_fetch_array($res2)){?>
                    <tr class="align-middle" align="center">
                        <td><?php echo($reg['Trabajo_idTrabajo']) ?></td>
                        <td><?php echo($reg['alumno_No_lista'])?></td>
                        <form action="subirArchivo.php" method="post" enctype="multipart/form-data">
                            <td><input type="text" name="calif"></td>
                            <input type="hidden" name="No_lista" value="<?php echo $reg['alumno_No_lista']?>">
                            <td><input type="file" name="imagen" value="" class="btn" style="overflow: hidden"></td>
                            <td><input type="submit" name="submit" value="Guardar archivo" class="btn btn-primary"></td>
                        </form>
                        <td>
                            <form action="verEvidencia.php" method="post">
                                <input type="hidden" name="No_lista" value="<?php echo $reg['alumno_No_lista']?>">
                                <input type="submit" name="submit" value="Ver evidencia"  class="btn btn-primary">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
